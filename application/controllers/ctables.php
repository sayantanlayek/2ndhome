
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctables extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('mtables');
         if(empty($this->session->userdata('userdata'))){
             redirect(base_url() . 'login');
         }
    }

    function index() {

        
        $data['sessiondata'] = $this->session->userdata('userdata');
        $data['tablelist']=$this->mtables->tablelist();
        $this->load->view('vdashheader',$data);
        $this->load->view('vtablelist',$data);
         $this->load->view('vdashfooter',$data);
    
    
    }

    function tableadd() {


        $data['sessiondata'] = $this->session->userdata('userdata');

        $this->load->view('vdashheader',$data);
        $this->load->view('vtableadd',$data);
        $this->load->view('vdashfooter',$data);
    
    
    }

     function processtableadd(){

        $data = $_POST;
         $result = $this->mtables->inserttable($data);

         if($result){
             $this->session->set_flashdata('TableStatus', 'You have been successfully saved a table information');
             redirect(base_url() . 'foodtablelist');
         }

    }

     function tableedit(){


        $cat_id=$_GET['id'];
        $data['tablebyid'] = $this->mtables->fetchtablebyid($cat_id);
        $data['sessiondata'] = $this->session->userdata('userdata');

        $this->load->view('vdashheader',$data);
        $this->load->view('vtableedit',$data);
        $this->load->view('vdashfooter',$data);
    }

    function updatetable(){
        $tab_id=$_GET['id'];
        $data = $_POST;
        $result = $this->mtables->updatetablebyid($tab_id,$data);
        if($result){
             $this->session->set_flashdata('TableStatus', 'You have been successfully updated table information');
             redirect(base_url() . 'foodtablelist');
         }
    }

    
}
