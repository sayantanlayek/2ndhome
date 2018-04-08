<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Csubmenu extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('msubmenu');
        $this->load->model('mmainmenu');
         if(empty($this->session->userdata('userdata'))){
             redirect(base_url() . 'adminlogin');
         }
    }

    function index() {

        
        $data['sessiondata'] = $this->session->userdata('userdata');
        $data['submenulist']=$this->msubmenu->submenulist();
        $this->load->view('vdashheader',$data);
        $this->load->view('vsubmenulist',$data);
        $this->load->view('vdashfooter',$data);
    
    
    }

     function submenuadd() {
        $data['sessiondata'] = $this->session->userdata('userdata');
        $data['mainmenulist']=$this->mmainmenu->mainmenulist();
        $this->load->view('vdashheader',$data);
        $this->load->view('vsubmenuadd',$data);
        $this->load->view('vdashfooter',$data);
    
    
    }
    function processaddsubmenu(){
        $data = $_POST;
        $result = $this->msubmenu->insertresubmenu($data);

         if($result){
             $this->session->set_flashdata('SubmenuStatus', 'You have been successfully saved A sub menu');
             redirect(base_url() . 'foodsubmenu');
         }

    }

     function submenuedit(){


        $sub_cat_id=$_GET['id'];
        $data['submenubyid'] = $this->msubmenu->fatchsubmenubyid($sub_cat_id);
        $data['sessiondata'] = $this->session->userdata('userdata');
        $data['mainmenulist']=$this->mmainmenu->mainmenulist();
        $this->load->view('vdashheader',$data);
        $this->load->view('vsubmenuedit',$data);
        $this->load->view('vdashfooter',$data);
    }

    function updatesubmenu(){
        $sub_cat_id=$_GET['id'];
        $data = $_POST;
        $result = $this->msubmenu->updatesubmenubyid($sub_cat_id,$data);
        if($result){
             $this->session->set_flashdata('MainmenuStatus', 'You have been successfully updated A sub menu');
             redirect(base_url() . 'foodsubmenu');
         }
    }


}