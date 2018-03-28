
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cmainmenu extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('mmainmenu');
         if(empty($this->session->userdata('userdata'))){
             redirect(base_url() . 'adminlogin');
         }
    }

    function index() {

        
        $data['sessiondata'] = $this->session->userdata('userdata');
        $data['mainmenulist']=$this->mmainmenu->mainmenulist();
        $this->load->view('vdashheader',$data);
        $this->load->view('vmainmenulist',$data);
         $this->load->view('vdashfooter',$data);
    
    
    }

    function mainmenuadd() {


        $data['sessiondata'] = $this->session->userdata('userdata');

        $this->load->view('vdashheader',$data);
        $this->load->view('vmainmenuadd',$data);
        $this->load->view('vdashfooter',$data);
    
    
    }

    function processaddmainmenu(){

        $data = $_POST;
         $result = $this->mmainmenu->insertremainmenu($data);

         if($result){
             $this->session->set_flashdata('MainmenuStatus', 'You have been successfully saved A main menu');
             redirect(base_url() . 'foodmainmenu');
         }

    }
    
}
