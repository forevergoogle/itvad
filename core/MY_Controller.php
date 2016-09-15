<?php
/**
 * Created by PhpStorm.
 * User: mith
 * Date: 3/23/2016
 * Time: 4:46 PM
 */
?>
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $controllerName = 'index';
    public $methodName     = 'index';
    public $viewData = array();

    public function __construct() {
        parent::__construct();

        $this->controllerName = $this->router->fetch_class();
        $this->methodName     = $this->router->fetch_method();
        //$this->load->library('my_layout');
    }
}
