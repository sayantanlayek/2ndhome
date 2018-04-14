
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ccheckout extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('mcheckout');
         if(empty($this->session->userdata('userdata'))){
             redirect(base_url() . 'login');
         }
    }

function index (){


	 $data['sessiondata'] = $this->session->userdata('userdata');
        $this->load->view('vdashheader',$data);
        $this->load->view('vcheckout',$data);
         $this->load->view('vdashfooter',$data);
  
	//echo "<pre>";print_r($data);die();
}

function ordermyfood(){
	$data = $_POST;
	$data['sessiondata'] = $this->session->userdata('userdata');
	 $result = $this->mcheckout->placemyorder($data);
         if($result){
             $this->session->set_flashdata('CheckoutStatus', 'Your order is succesfull. It will reach within 30 Minits');
             redirect(base_url() . 'myorder');
         }
}


}