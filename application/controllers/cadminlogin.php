
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cadminlogin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        date_default_timezone_set('Asia/Kolkata');
        //$this->load->model('measytourzhome');
    }

    function index() {
        $this->load->view('vadminlogin');
    }
    
}