<?php

class Mcheckout extends CI_Model {

var $db;

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    function placemyorder($data){
    	$arrayname = array(
            'user_id' => $data['sessiondata']['user_id'],
            'order_detils' => $data['myorderlist'],
            'order_total' => $data['mytotalprice']
        );
        $status = $this->db->insert('tbl_order', $arrayname);
        return true;
    }

	}

	?>