
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
         $this->db->where('order_type','online');
         $query = $this->db->get();
         return $query->result();

    }

    function totalorderbyuserid($data){

    	$this->db->select('*');
         $this->db->from('tbl_order');
         $this->db->where('user_id',$data);
          $this->db->where('order_type','online');
         $query = $this->db->get();
         return $query->result();

    	
    }
     function detailorderbid($data){

    	$this->db->select('*');
         $this->db->from('tbl_order');
         if($data['sessiondata']['user_role'] != 'admin'){
         $this->db->where('user_id',$data['sessiondata']['user_id']);
         $this->db->where('order_type','online');
    	 }
         $this->db->where('order_id',$data['o_id']);
         $query = $this->db->get();
         return $query->result();

    	
    }
    function detailorderbiddine($data){

        $this->db->select('ord.*,tbl.*');
         $this->db->from('tbl_order ord');
 $this->db->join('tbl_table tbl','ord.orde_table_number = tbl.table_id');
         $this->db->where('ord.order_id',$data['o_id']);
         $query = $this->db->get();
         return $query->result();

        
    }


    function insertdineorder($data){
        $arrayname = array(
            'user_id' => '1',
            'order_detils' => $data['ordertot'],
            'order_total' => $data['totalpricedine'],
            'order_type' => 'offline',
            'orde_table_number' => $data['table']
        );
        $status = $this->db->insert('tbl_order', $arrayname);



$this->db->update('tbl_table', array('table_status' => 'Engaged'), array('table_id' => $data['table']));


        return true;
    }

    function totalorderdine($data){

        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->where('order_type','offline');
        $query = $this->db->get();
         return $query->result();
    }

    function updatedineorder($data,$data1){
        $this->db->update('tbl_order', array('order_detils' => $data['ordertot'],'order_total' =>$data['totalpricedine']), array('order_id' => $data1));
        return true;

    }
function dinedone($data){
    $this->db->update('tbl_order', array('order_status' => 'Done'), array('order_id' => $data));
    $this->db->select('orde_table_number');
    $this->db->from('tbl_order');
    $this->db->where('order_id',$data);
     $query = $this->db->get();
     $val = $query->result();
     $tablefree = $val[0]->orde_table_number;
     $this->db->update('tbl_table', array('table_status' => 'free'), array('table_id' => $tablefree));
     return true;
}



function onlineordersuccess($data){
    $this->db->update('tbl_order', array('order_status' => 'Done'), array('order_id' => $data));
    return true;
}

    }


    ?>