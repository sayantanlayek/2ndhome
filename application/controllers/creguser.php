<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Creguser extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
         $this->load->library('session');
         $this->load->model('mreguser');
        date_default_timezone_set('Asia/Kolkata');
        
    }


    function index() {
        if (($this->session->userdata('logged_in'))===TRUE) {
            redirect(base_url('cclient/dashboard'));
           
        }
        else {
            $data['msg'] = " ";
        $this->load->view('login', $data);
        }  
    }
    function reguser() {

        $data = $_POST;
        $result = $this->mreguser->insertregisterdata($data);

        if($result){
            $this->session->set_flashdata('verificationStatus', 'You have been successfully registered. Go back to login pags');
             redirect(base_url() . 'userregistration');
        }
    }



    function loginuser(){

        $data = $_POST;
        $status = $this->mreguser->logincheck($data);
        if ($status =="1") {
            if($data['cart'] == "" && $data['total'] == ""){
                 redirect(base_url('dashboard'));

            }else{
                 redirect(base_url('checkoutpage'));

            }
                       
            
               
           
        } else {
            $this->session->set_flashdata('errorStatus', 'Verification Authentication Failed');
            redirect(base_url() . 'login');
        }

    }


    function logout() {
        
        $data1 = array(
            'user_name' => $this->session->userdata('user_name'),
            'logged_in' => false
        );
        $this->session->unset_userdata($this->session->userdata('userdata'));
        $this->session->sess_destroy();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');

        //$this->index();
        redirect(base_url());
    }



    function userlist(){
        $data['sessiondata'] = $this->session->userdata('userdata');
        if($data['sessiondata']['user_role'] == "admin"){
            $data['userlist'] = $this->mreguser->totaluser($data);
         }
         $this->load->view('vdashheader',$data);
        $this->load->view('vuserlist',$data);
        $this->load->view('vdashfooter',$data);
    }

    function userdetailsbyid(){
        $data['sessiondata'] = $this->session->userdata('userdata');
            $data['userdetail'] = $this->mreguser->userdetails($data['sessiondata']['user_id']);
         $this->load->view('vdashheader',$data);
        $this->load->view('vuserdetails',$data);
        $this->load->view('vdashfooter',$data);
    }
    
}