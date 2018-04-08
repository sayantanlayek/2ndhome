<?php

class Mmenustructure extends CI_Model {

    var $db;

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

public function get_nenu()
{
    $query = $this->db->get('tbl_catagory');
    $return = array();

    foreach ($query->result() as $category)
    {
        $return[$category->category_id] = $category;
        $return[$category->category_id]->subs = $this->get_sub_nenu($category->category_id); // Get the categories sub categories
    }

    return $return;
}


public function get_sub_nenu($category_id)
{
    $this->db->where('main_category', $category_id);
    $query = $this->db->get('tbl_sub_catagory');
    return $query->result();
}



}