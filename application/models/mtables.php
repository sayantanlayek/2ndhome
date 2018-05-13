<?php

class Mtables extends CI_Model {

    var $db;

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    function inserttable($data){
    	 $arrayname = array(
            'table_name' => $data['tablename']
        );
        $status = $this->db->insert('tbl_table', $arrayname);
        return true;

    }
     function tablelist()
	{
            $this->db->select('*');
            $this->db->from('tbl_table');
            $this->db->order_by('table_id','aesc');
            $query = $this->db->get();
            return $query->result();
	}
     function nonengtablelist(){
         $this->db->select('*');
            $this->db->from('tbl_table');
            $this->db->order_by('table_id','aesc');
            $this->db->where('table_status','free');
            $query = $this->db->get();
            return $query->result();
     }
	function fetchtablebyid($id){
		 $this->db->select('*');
         $this->db->from('tbl_table');
         $this->db->where('table_id',$id);
         $query = $this->db->get();
         return $query->result();
	}

	function updatetablebyid($id,$data){

		$this->db->update('tbl_table', array('table_name' => $data['tablename']), array('table_id' => $id));
		return true;

	}

}