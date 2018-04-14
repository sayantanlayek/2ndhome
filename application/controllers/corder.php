<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Corder extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        date_default_timezone_set('Asia/Kolkata');
       $this->load->model('morder');
         if(empty($this->session->userdata('userdata'))){
             redirect(base_url() . 'login');
         }
    }

	function index(){
		 $data['sessiondata'] = $this->session->userdata('userdata');
         if($data['sessiondata']['user_role'] == "admin"){
            $data['orderdata'] = $this->morder->totalorder();
         }else{
             $data['orderdata'] = $this->morder->totalorderbyuserid($data['sessiondata']['user_id']);
         }
         $this->load->view('vdashheader',$data);
         $this->load->view('vorder',$data);
         $this->load->view('vdashfooter',$data);

	}

}

?>