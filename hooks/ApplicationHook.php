<?php

require_once 'annotations/annotations.php';
require_once 'annotations/Secured.php';
require_once 'annotations/AjaxAction.php';
require_once 'annotations/Decorated.php';
require_once 'annotations/Api.php';
require_once 'annotations/DecoratedForMobile.php';
require_once 'annotations/EntityField.php';

/**
 * The hook for application, do check role and decorate page using Annotations
 * @property CI_Loader CI->load
 * @property redux_auth CI->redux_auth
 * @author Trieu Nguyen. Email: tantrieuf31@gmail.com
 */
class ApplicationHook {

    /**
     * CodeIgniter global
     *
     * @var string
     * */
    protected $CI;
    public static $LOGIN_URL = "";
    protected $controllerRequest;
    protected $controllerName = NULL;
    protected $controllerMethod = NULL;
    protected $reflectedController = NULL;
    public static $countMethodCall = 0;
    public static $CONTROLLERS_FOLDER_PATH = "";
    public static $controllers_map;
    protected $user_profile = FALSE;

    private function initHook() {
        try {
            $this->CI = & get_instance();
            $this->beginRequest();           
        } catch (Exception $e) {
            echo "Page error:<br>";
            echo $e->getMessage();
        }
    }

    public function __construct() {
        $this->initHook();
    }

    function ApplicationHook() {
        $this->initHook();
    }



    /**
     *
     * @return ReflectionAnnotatedMethod
     */
    protected function getReflectedController() {
        if ($this->reflectedController == NULL) {
            try {
                $this->reflectedController = new ReflectionAnnotatedMethod($this->controllerName, $this->controllerMethod);
            } catch (ReflectionException $e) {
                ApplicationHook::logError($e->getTraceAsString());
                return NULL;
            }
        }
        return $this->reflectedController;
    }


    public static function getExpireTime($num_days = 1) {
        $offset = 60 * 60 * 24 * $num_days;
        //  return gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
        //FIXME
        return "";
    }

    public function setPageHeaderCached($num_days = 1) {
        //FIXME
        // Header("Cache-Control: must-revalidate");
        //  $ExpStr = "Expires: " . self::getExpireTime($num_days);
        // Header($ExpStr);
    }

    protected function getThemeNameFromActionController($reflection = FALSE) {
        if ($reflection === FALSE) {
            $reflection = $this->getReflectedController();
        }
        $themeName = $reflection->getAnnotation('Decorated')->themeName;
        $themeName .= "/";
        return $themeName;
    }

    /**
     *
     * @return boolean
     */
    protected function shouldApplyDecorator() {
        if (ApplicationHook::$CONTROLLERS_FOLDER_PATH === "") {
            ApplicationHook::$CONTROLLERS_FOLDER_PATH = $this->CI->config->item('controllers_directory');
        }
        if ($this->controllerName != NULL && $this->controllerMethod != NULL) {
            return TRUE;
        }

        $index_page = $this->CI->config->item('index_page');

        $tokens = explode("/" . $index_page . "/", current_url());
        if (sizeof($tokens) >= 2) {
            $routeTokens = explode("/", $tokens[1]);

            if (isset($routeTokens[0]) && strtolower($routeTokens[0]) === 'oauth') {
                //skip oauth case ?
                return FALSE;
            }

            $routeTokensSize = sizeof($routeTokens);
            if ($routeTokensSize >= 2) {
                $c = 0;
                while (is_dir(ApplicationHook::$CONTROLLERS_FOLDER_PATH . $routeTokens[$c])) {
                    if ($routeTokens[$c] == "admin") {
                        $this->is_in_admin_domain = TRUE;
                        $c++;
                        break;
                    }
                    $c++;
                }
                $this->controllerName = $routeTokens[$c];

                $next_c = $c + 1;
                if ($routeTokensSize === $next_c) {
                    $this->controllerMethod = "index";
                } else {
                    $this->controllerMethod = $routeTokens[$next_c];
                }

                $this->controllerRequest = $tokens[1];
                return TRUE;
            } else if ($routeTokensSize === 1 && strlen($routeTokens[0]) > 0) {
                $this->controllerName = $routeTokens[0];
                $this->controllerMethod = "index";
                $this->controllerRequest = $tokens[1];
                $this->shouldGoToAdminPanel($this->controllerName);
                return TRUE;
            }
        } else if (strrpos(current_url(), "/" . $index_page) > 0) {
            $this->controllerName = "welcome";
            $this->controllerMethod = "index";
            $this->controllerRequest = "";
            return TRUE;
        }
        return FALSE;
    }

    /**
     * Decorate the final view and response to client.
     * Each user group will be decorated by defferent theme template
     *
     */
    public function decoratePage() {
        if ($this->shouldApplyDecorator()) {
            $reflection = $this->getReflectedController();
            $this->is_logged_in = FALSE;
            if ($reflection != NULL) {
                if ($reflection->hasAnnotation('Decorated')) {
                    if (self::isMaintenanceEnabled()) {
                        echo "<h1>Server is on Maintenance Planning, please come back later</h1>";
                        return;
                    }

                    $themeName = $this->getThemeNameFromActionController($reflection);
                   // echo "ok $themeName"; die();
                    $this->setPageHeaderCached();
                    $data = $this->processFinalViewData();

                    echo ( $this->CI->load->view("decorator/themes/" . $themeName . "page_template", $data, TRUE) );
                    return;
                } 
            }
        }
        echo $this->CI->output->get_output();
        $this->CI->benchmark->mark('code_end');

    }

    /**
     * Auto detect language for site base on the index file name
     * The default is Vietnamese
     */
    public function setSiteLanguage() {
        $PAGE_LANGUAGE_KEY = "vietnamese";
        if (defined('LANGUAGE_INDEX_PAGE')) {
            $this->CI->config->set_item('index_page', LANGUAGE_INDEX_PAGE);
            if (LANGUAGE_INDEX_PAGE === "english.php") {
                $PAGE_LANGUAGE_KEY = "english";
            }
        } else {
            define('LANGUAGE_INDEX_PAGE', 'index.php');
        }
        $this->CI->lang->load('fields', $PAGE_LANGUAGE_KEY);
    }

    /**
     *
     * @return array of data
     */
    protected function processFinalViewData() {
        $this->user_profile = array();
        $page_content = $this->decoratePageContent();
        $data = array( 'page_content' => $page_content  );
        $data['controller'] = $this->controllerName . "/" . $this->controllerMethod;
        $data['nameController'] = $this->controllerName;
        $data['nameMethod'] = $this->controllerMethod;
        $data['page_respone_time'] = $this->endAndGetResponseTime();
        return $data;
    }

    protected function decoratePageContent() {
        return $this->CI->output->get_output();
    }


    protected function beginRequest() {
        $this->CI->benchmark->mark('code_start');
    }

    protected function endAndGetResponseTime() {
        $this->CI->benchmark->mark('code_end');
        $diff_time = $this->CI->benchmark->elapsed_time('code_start', 'code_end');
        return $diff_time;
    }

    public static function logInfo($text) {
        if (ApplicationHook::isLogEnabled()) {
           //TODO
        }
    }

    public static function logError($text) {
        if (ApplicationHook::isLogEnabled()) {
            //TODO
        }
    }

    public static function log($text) {
        if (ApplicationHook::isLogEnabled()) {
            //TODO
        }
    }

    public static function isLogEnabled() {
        $ci = &get_instance();
        return $ci->config->item('fire_php_log_enabled');
    }

    public static function isMaintenanceEnabled() {
        $ci = &get_instance();
        return $ci->config->item('maintenance_enabled');
    }


}