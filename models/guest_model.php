<?php
/**
 * Created by PhpStorm.
 * User: mith
 * Date: 9/15/2015
 * Time: 4:00 PM
 */
class guest_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function addGuest($data){

        $this->db->insert('guest', $data);

        return ($this->db->affected_rows() > 0) ? true : false;
    }
}