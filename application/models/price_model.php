<?php
class Price_model extends CI_Model {
 


    public function __construct(){

        $this->load->database();

    }

    public function get_price_rate(){

    	$this->db->select('*');
        $this->db->from('rate_price');
        $query = $this->db->get();         
        return $query->result_array();
               
    }

}
