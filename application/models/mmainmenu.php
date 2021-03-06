<?php

class Mmainmenu extends CI_Model {

    var $db;

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    function insertremainmenu($data){
    	 $arrayname = array(
            'catagory_name' => $data['mainmenufield']
        );
        $status = $this->db->insert('tbl_catagory', $arrayname);
        return true;

    }

    function mainmenulist()
	{
            $this->db->select('*');
            $this->db->from('tbl_catagory');
            $this->db->order_by('category_id','aesc');
            $query = $this->db->get();
            return $query->result();
	}

	function fetchmainmenubyid($id){
		 $this->db->select('*');
         $this->db->from('tbl_catagory');
         $this->db->where('category_id',$id);
         $query = $this->db->get();
         return $query->result();
	}

	function updatemainmenubyid($id,$data){

		$this->db->update('tbl_catagory', array('catagory_name' => $data['mainmenufield']), array('category_id' => $id));
		return true;

	}

    function deletemainmenubyid($id){

        $this->db->delete('tbl_catagory',array('category_id' => $id));
        return true;

    }

}