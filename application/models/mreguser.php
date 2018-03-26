<?php

class Mreguser extends CI_Model {

    var $db;

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    function insertregisterdata($data) {
        $arrayname = array(
            'user_name' => $data['username'],
            'user_email' => $data['email'],
            'user_phone' => $data['phone'],
            'user_address' => $data['address'],
            'user_password' => md5($data['password']),
            'user_role' => 'user'
        );
        $status = $this->db->insert('tbl_users', $arrayname);
        return true;
    }

    function logincheck($data){

    	$email = "";
        if (isset($data['email'])) {
            $email = $data['email'];
        }
        $this->load->library('session');
        $this->db->select('*');
        $query = $this->db->get_where('tbl_users', array('user_password' => md5($this->input->post("password")), 'user_email' => $email, 'user_status'=>'active', 'user_email_auth'=>'yes'));
        echo $cou = $query->num_rows();
        if ($cou > 0) {
            $row = $query->row();
            $this->db->select('*');
            $uniqueId = substr(md5(uniqid(rand(), true)) , 16);
            $sessionId ='USES'.$uniqueId;
            $data1 = array(
                'user_name' => $row->user_name,
                'user_email' => $row->user_email,
                'user_img' => $row->user_image,
                'logged_in' => true,
                'user_role' => $row->user_role,
                'user_id' => $row->user_id,
                'SESS_ID'=>$sessionId,
            );
            $this->session->set_userdata('userdata', $data1);
            return "1";
        } else {
            return "0";
        }

    }
}