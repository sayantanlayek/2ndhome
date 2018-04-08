<?php

class Msubmenu extends CI_Model {

    var $db;

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }
    function insertresubmenu($data){
    	 $arrayname = array(
            'sub_category_name' => $data['submenufield'],
            'sub_category_desc' => $data['subdescription'],
            'sub_category_price' => $data['submenuprice'],
            'main_category' => $data['mainmenu']
        );
        $status = $this->db->insert('tbl_sub_catagory', $arrayname);
        return true;

    }

     function submenulist()
	{
            $this->db->select('cat.*,subcat.*');
            $this->db->from('tbl_sub_catagory subcat');
            $this->db->join('tbl_catagory cat','subcat.main_category = cat.category_id');
            $this->db->order_by('sub_category_id','aesc');
            $query = $this->db->get();
            return $query->result();
	}
	function fatchsubmenubyid($id){
		 $this->db->select('*');
         $this->db->from('tbl_sub_catagory');
         $this->db->where('sub_category_id',$id);
         $query = $this->db->get();
         return $query->result();
	}
	function updatesubmenubyid($id,$data){

		$this->db->update('tbl_sub_catagory', array('main_category' => $data['mainmenu'],'sub_category_price' => $data['submenuprice'],'sub_category_desc' => $data['subdescription'],'sub_category_name' => $data['submenufield']), array('sub_category_id' => $id));
		return true;

	}
}