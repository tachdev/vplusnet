<?php
class Customer_model extends CI_Model {
 
    var $DBtables;
    var $INDEXtables;

    public function __construct(){

        $this->load->database();
        $this->DBtables = 'customer';
        $this->INDEXtables = 'id';

    }
    public function get_customer_search( $search_string=null , $order=null, $order_type='Asc', $limit_start, $limit_end){
        
        $this->db->select('*');
        $this->db->from($this->DBtables);

        if($search_string){

            $this->db->like('mobile', $search_string);
            $this->db->or_like('email', $search_string);      
        }

        if($order){

            $this->db->order_by($order, $order_type);

        }else{

            $this->db->order_by('id', $order_type);
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

    public function approve_customer($status,$customer_id){

        $data = array(

              'role' => $status
        );

        $this->db->where($this->INDEXtables, $customer_id);
        $this->db->update($this->DBtables, $data);

        return 1;
    }

    public function get_customer($id = null , $limitstart = null , $limitend = null){
        
        $this->db->select('*');
        $this->db->from($this->DBtables);
        $this->db->order_by("id", "desc");
        if(isset($id)){

            $this->db->where('id', $id); 
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

    public function addSlider($name){


        $new_team_insert_data = array(

                'slider_name' => $name,         
                'slider_top_text' => '',
                'slider_main_text' => '',
                'slider_bottom_text' => '',
                'slider_image' => '',
                'slider_active' => 0

        );

        return $insert = $this->db->insert($this->DBtables, $new_team_insert_data);

                   
    }

    public function delete($id){

        $this->db->where('id', $id);
        $this->db->delete($this->DBtables);
    }

    public function count_customer( $search_string=null, $order=null){

        $this->db->select('*');
        $this->db->from('customer');

        if($search_string){

            $this->db->like('mobile', $search_string);
            $this->db->or_like('email', $search_string);
        }
        if($order){

            $this->db->order_by($order, 'Asc');

        }else{

            $this->db->order_by('id', 'Asc');

        }

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_customer(){

        return $this->db->count_all($this->DBtables);

    }

    public function check_package_active($mobile_number,$order_id){


        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('mobile', $mobile_number); 
        $this->db->where('package_active', $order_id); 
        $query = $this->db->get(); 
        $query = $query->result_array();

        if(!empty($query)){

            $data = array(

              'package_active' => null
            );

            $this->db->where('mobile', $mobile_number); 
            $this->db->update('customer', $data);

        }
    }

   
 
}

?>  
