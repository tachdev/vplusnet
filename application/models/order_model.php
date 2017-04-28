<?php
class Order_model extends CI_Model {
 
    var $DBtables;
    var $INDEXtables;

    public function __construct(){

        $this->load->database();
        $this->DBtables = 'order';
        $this->INDEXtables = 'order_id';

    }
    public function get_order_search( $search_string=null , $order=null, $order_type='Asc', $limit_start, $limit_end){
        
        $this->db->select('*');
        $this->db->from($this->DBtables);

        if($search_string){

            $this->db->like('order_id', $search_string);
            $this->db->or_like('mobile_number', $search_string);
            $this->db->or_like('firstname', $search_string);      
        }

        if($order){

            $this->db->order_by($order, $order_type);

        }else{

            $this->db->order_by($this->INDEXtables, $order_type);
        }

        $this->db->limit($limit_start, $limit_end);   
        $query = $this->db->get(); 
        return $query->result_array();  
            
    }

    public function updateSlider($id, $text_first , $text_main , $text_bottom , $active ){

        $data = array(

               'slider_top_text' => $text_first,
               'slider_main_text' => $text_main,
               'slider_bottom_text' => $text_bottom,
               'slider_active' => $active
        );

        $this->db->where( $this->INDEXtables, $id);
        $this->db->update( $this->DBtables , $data);

        $report['error'] = $this->db->_error_number();
        $report['message'] = $this->db->_error_message();

        if($report !== 0){

            return true;

        }else{

            return false;
        }

    }

    public function get_order($id = null , $limitstart = null , $limitend = null){
        
        $this->db->select('*');
        $this->db->from($this->DBtables);
        $this->db->order_by($this->INDEXtables , "desc");
        if(isset($id)){

            $this->db->where('order_id', $id); 
        }
        if(isset($limitstart)){

            $this->db->limit($limitstart,$limitend); 
        }

        $query = $this->db->get(); 
        return $query->result_array();
            
    }

    public function get_order_id($order_id){

    	$this->db->select('*');
        $this->db->from('order');
        $this->db->where('order_id', $order_id); 
        $query = $this->db->get(); 
        return $query->result_array();

    }

    public function get_payment_confirm($tran_id){


    	$this->db->select('*');
        $this->db->from('payment_confirm');
        $this->db->where('tran_id', $tran_id); 
        $query = $this->db->get(); 
        return $query->result_array();

    }

    public function updateImagePath($id , $NewImageName){

        $data = array(

              'slider_image' => $NewImageName
        );

        $this->db->where($this->INDEXtables, $id);
        $this->db->update($this->DBtables, $data);

        $report['error'] = $this->db->_error_number();
        $report['message'] = $this->db->_error_message();
        if($report !== 0){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){

        $this->db->where('order_id', $id);
        $this->db->delete($this->DBtables);
    }

    public function count_order( $search_string=null, $order=null){

        $this->db->select('*');
        $this->db->from('order');

        if($search_string){

            $this->db->like('order_id', $search_string);
            $this->db->or_like('mobile_number', $search_string);
            $this->db->or_like('firstname', $search_string);
        }
        if($order){

            $this->db->order_by($order, 'Asc');

        }else{

            $this->db->order_by('order_id', 'Asc');

        }

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_slider(){

        return $this->db->count_all($this->DBtables);

    }


   
 
}

?>  
