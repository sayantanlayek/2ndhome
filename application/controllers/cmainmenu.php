
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cdashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        date_default_timezone_set('Asia/Kolkata');
        //$this->load->model('measytourzhome');
         if(empty($this->session->userdata('userdata'))){
             redirect(base_url() . 'adminlogin');
         }
    }

    function index() {

        
        $data['sessiondata'] = $this->session->userdata('userdata');
        $this->load->view('vdashheader',$data);
        $this->load->view('vdashbody',$data);
        $this->load->view('vdashfooter',$data);
    
    
    }
    
}
