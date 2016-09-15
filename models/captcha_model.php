<?php
/**
 * Created by PhpStorm.
 * User: mith
 * Date: 9/15/2015
 * Time: 2:37 PM
 */

class captcha_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function checkCaptcha($captcha){
        $expiration = time()-7200;
        // First, delete old captchas
        $this->db->where('captcha_time <', $expiration);
        $this->db->delete('captcha');

    // Then see if a captcha exists
        $this->db->select('*')
            ->from('captcha')
            ->where('word', $captcha['word'])
            ->where('ip_address', $captcha['ip_address'])
            ->where('captcha_time >', $expiration)
        ;

        $query = $this->db->get();
        if ($query->num_rows() !== 1) {
            return false;
        }
        return true;
    }

    public function addCaptcha($data){

        $this->db->insert('captcha', $data);

        return ($this->db->affected_rows() > 0) ? true : false;
    }
}