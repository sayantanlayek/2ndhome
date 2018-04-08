<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cmenustructure extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('mmenustructure');
    }

function index (){


	$data['menu'] = $this->mmenustructure->get_nenu();
        $this->load->view('secondhomefront/votherheader');
        $this->load->view('secondhomefront/vsecondhomenenu',$data);
        $this->load->view('secondhomefront/vhomefooter');
  
	//echo "<pre>";print_r($data);die();
}


}