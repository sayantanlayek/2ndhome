
<?php

class Morder extends CI_Model {

var $db;

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    function totalorder(){

    	$this->db->select('*');
         $this->db->from('tbl_order');
         $query = $this->db->get();
         return $query->result();

    }

    function totalorderbyuserid($data){

    	$this->db->select('*');
         $this->db->from('tbl_order');
         $this->db->where('user_id',$data);
         $query = $this->db->get();
         return $query->result();

    	
    }

    }


    ?>