<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cdine extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('mmenustructure');
        $this->load->model('mtables');
        $this->load->model('morder');
         if(empty($this->session->userdata('userdata'))){
             redirect(base_url() . 'login');
         }
    }

function index (){


$data['sessiondata'] = $this->session->userdata('userdata');
if($data['sessiondata']['user_role'] == "admin"){
            $data['dineorderdata'] = $this->morder->totalorderdine($data);
         }
         $this->load->view('vdashheader',$data);
        $this->load->view('vdinlist',$data);
        $this->load->view('vdashfooter',$data);
}
function adddinebytable (){

	$data['sessiondata'] = $this->session->userdata('userdata');
	$data['menu'] = $this->mmenustructure->get_nenu();
	$data['tablelist']=$this->mtables->nonengtablelist();
        $this->load->view('vdashheader',$data);
        $this->load->view('vdine',$data);
        $this->load->view('vdashfooter',$data);
  
	//echo "<pre>";print_r($data);die();
}


function addineorder(){
	  $data = $_POST;
         $result = $this->morder->insertdineorder($data);

         if($result){
             $this->session->set_flashdata('diineStatus', 'You have been successfully saved Dine Status');
             redirect(base_url() . 'dineorderlist');
         }
}


function detailsdinebyid(){
 $data['o_id'] = $_GET['id'];
 $data['menu'] = $this->mmenustructure->get_nenu();
        $data['sessiondata'] = $this->session->userdata('userdata');
        $data['dineorderdatabyid'] = $this->morder->detailorderbiddine($data);
        $this->load->view('vdashheader',$data);
         $this->load->view('vdineorderbyid',$data);
         $this->load->view('vdashfooter',$data);

}


function updineorderbyid(){
	$o_id = $_GET['id'];
	$data = $_POST;
	 $result = $this->morder->updatedineorder($data,$o_id);
	if($result){
             $this->session->set_flashdata('diineStatus', 'You have been successfully Updated Dine Order');
             redirect(base_url() . 'dineorderlist');
         }
}

function dinedone(){
	$id =$_GET['id'];
	 $result = $this->morder->dinedone($id);
	if($result){
             $this->session->set_flashdata('diineStatus', 'Dine has been Complited');
             redirect(base_url() . 'dineorderlist');
         }
}




}