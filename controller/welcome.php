<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
//        $this->load->Model("captcha_model");
//        $this->load->Model("guest_model");
        $this->load->helper('language');
        $this->load->library('user_agent');

    }
    /**
     * @Decorated
     */
    public function index()
    {

        $data = array();
        $cap = array();

//        $this->load->helper('captcha');
//        $vals = array(
//            'img_path'	=> './assets/captcha/',
//            'img_url'	=> './assets/captcha/',
//            'font_path' => './assets/fonts/Verdana.ttf',
//            'img_width'	=> '170',
//            'img_height' => '50',
//            'font_size' => 20,
//        );
//        $cap = create_captcha($vals);
//        $data = array(
//            'captcha_time'	=> $cap['time'],
//            'ip_address'	=> $this->input->ip_address(),
//            'word'	=> $cap['word']
//        );
//
//        $this->captcha_model->addCaptcha($data);

        if ($this->agent->is_mobile())
            $this->load->view("itvad/home_mobile",$cap);
        else
            $this->load->view("itvad/home", $cap);


    }

    public function captcha_check($word)
    {
        $data = array(
            'ip_address'	=> $this->input->ip_address(),
            'word'	=> $word
        );
        $check = $this->captcha_model->checkCaptcha($data);

        if ($check) {
            return true;
        } else {

            $this->form_validation->set_message('captcha_check', 'Captcha is not match with image. Please try again!');
            return false;
        }
    }
    /**
     * @Decorated
     */
    public function test()
    {

        $this->load->view("itvad/test");
    }

    /**
     * @Decorated
     * @author MiTH
     */
    public function advertise()
    {
        $data['pageTitle'] = "Quảng cáo iTVad";
        if ($this->agent->is_mobile())
            $this->load->view("itvad/advertise_mobile",$data);
        else
            $this->load->view("itvad/advertise",$data);

    }
    /**
     * @Decorated
     * @author MiTH
     */
    public function team()
    {
        $data['pageTitle'] = "Tuyển dụng iTVad";
        if ($this->agent->is_mobile())
            $this->load->view("itvad/team_mobile",$data);
        else
            $this->load->view("itvad/team",$data);
    }
    /**
     * @Decorated
     * Tuyển dụng
     * @author MiTH
     */
    public function recruit()
    {
        /*title recruit*/
        $recruit_id = (int)$this->input->get('id');
        $recruit_cate= $this->input->get('cate');

        $data = array(
            "recruit_id" => $recruit_id,
            "recruit_cate" => $recruit_cate,
            );
        $title = "iTVad";
        if($recruit_cate == 'tech'){
            switch($recruit_id){
                case 1:
                    $title = "Big Data Wizard (aka: Backend Engineer) iTVad";break;
                case 2:
                    $title = "Advertising UX Wizard (aka: Front-end SDK Engineer) iTVad";break;
                case 3:
                    $title = "Data Story Teller (aka: Front-end Engineer) iTVad";break;

            };
        }
        if($recruit_cate == 'sale'){
            switch($recruit_id){
                case 1:
                    $title = "Giám đốc Kinh doanh Toàn quốc iTVad";break;
                case 2:
                    $title = "Trưởng phòng Kinh doanh Miền Nam/ Miền Bắc iTVad";break;
                case 3:
                    $title = "Nhân viên Kinh doanh Quảng cáo iTVad";break;

            };
        }
        if($recruit_cate == 'product') {
            switch ($recruit_id) {
                case 1:
                    $title = "Chuyên viên Lập kế hoạch quảng cáo iTVad";break;
            }
        }

        $data['pageTitle'] = $title;
        if ($this->agent->is_mobile())
            $this->load->view("itvad/recruit_mobile",$data);
        else
            $this->load->view("itvad/recruit",$data);
    }
    /**
     * @Decorated
     * Dữ liệu
     * @author MiTH
     */
    public function analyse()
    {
        $data['pageTitle'] = "Dữ liệu iTVad";
        if ($this->agent->is_mobile())
            $this->load->view("itvad/analyse_mobile",$data);
        else
            $this->load->view("itvad/analyse",$data);

    }
    /**
     * @Decorated
     * AdsPlay
     * @author MiTH
     */
    public function adsplay()
    {
        $data['pageTitle'] = "Adsplay iTVad";
        if ($this->agent->is_mobile())
            $this->load->view("itvad/adsplay_mobile",$data);
        else
            $this->load->view("itvad/adsplay",$data);
    }
    /**
     * AdsPlay
     * @author MiTH
     */
    public function demofptplay(){
//        $data['pageTitle'] = "Demo FPTPlay";
        $this->load->view("itvad/fptplay");
    }
    /**
     * AdsPlay
     * @author MiTH
     */
    public function fptplaysmarttv(){

        $this->load->view("itvad/fptplay_smarttv");
    }
    /**
     * AdsPlay
     * @author MiTH
     */
    public function fptplaymobile(){
//        $data['pageTitle'] = "Demo FPTPlay";
        $this->load->view("itvad/fptplay_mobile");
    }
    /**
 * AdsPlay
 * @author MiTH
 */
    public function demonhacso(){
//        $data['pageTitle'] = "Demo FPTPlay";
        $this->load->view("itvad/nhacso");
    }
    /**
     * AdsPlay
     * @author MiTH
     */
    public function breakingnews(){
//        $data['pageTitle'] = "Demo FPTPlay";
        $this->load->view("itvad/nhacso_breakingnews");
    }
    /**
     * AdsPlay
     * @author MiTH
     */
    public function fshare(){
//        $data['pageTitle'] = "Demo FPTPlay";
        $this->load->view("itvad/fshare");
    }

    /**
     * Demo Smart TV Sony
     */
    public function sonysmarttv(){

        $this->load->view("itvad/sony_smarttv");
    }
    /**
     * Demo Infeed TVC
     */
    public function infeedtvc(){

        $this->load->view("itvad/infeed_tvc");
    }
    /**
     * Demo Masthead TVC
     */
    public function mastheadtvc(){

        $this->load->view("itvad/masthead_tvc");
    }
    /**
     * @Decorated
     * send mail contact
     * @author MiTH
     */
    public function contact(){

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('company', 'Company', 'required');
        $this->form_validation->set_rules('number-phone', 'Phone', 'required|regex_match[/^[0-9().-]+$/]');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('captcha', 'Captcha', 'required|callback_captcha_check');

        $this->form_validation->set_error_delimiters('<p style="color: white;font-weight: bold" class="error">', '</p>');

        if ($this->form_validation->run() == false) {
            echo validation_errors(); die;
        } else {
            $this->load->library('email');
            $name = $this->input->post('name');
            $company = $this->input->post('company');
            $position = $this->input->post('position');
            $email = $this->input->post('email');
            $number_phone = $this->input->post('number-phone');
            $chk_news_ads = $this->input->post('chk-news-ads');
            $option_contact = $this->input->post('option-contact');
            $data = array(
                'name' => $name,
                'company' => $company,
                'position' => $position,
                'email' => $email,
                'phone' => $number_phone,
                'title' => $option_contact,
                'check_update_news' => $chk_news_ads

            );
            $this->guest_model->addGuest($data);
            $content = "\n\n"
                // ."Chào {$name},\n\n "
                . "Tên: {$name}.\n\n<br>"
                . "Công Ty : {$company}.\n\n<br>"
                . "Vị Trí: {$position}.\n\n<br>"
                . "Email: {$email}.\n\n<br>"
                . "Số Điện Thoại: {$number_phone}.\n\n <br>"
                . "Liên hệ: {$option_contact}.\n\n <br>";
//                . "Cập nhật tin: {$chk_news_ads}.\n\n <br>";

            $this->email->from($email, $name);
            $this->email->to("itvad.fpt@gmail.com","Quảng Cáo");
            $this->email->subject($option_contact);
            $this->email->message($content);

            try {

                $this->email->send();
                echo 1; die;
//
            } catch (Exception $e) {

                echo 'Caught exception: ', $e->getMessage(), "\n";die;
            }
        }
    }
}