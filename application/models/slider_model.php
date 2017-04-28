<?php
class Slider_model extends CI_Model {
 
    var $DBtables;
    var $INDEXtables;

    public function __construct()
    {
        $this->load->database();
        $this->DBtables = 'slider';
        $this->INDEXtables = 'slider_id';
    }
    public function get_Team_Search( $search_string=null , $order=null, $order_type='Asc', $limit_start, $limit_end)
    {
        
        $this->db->select('*');
        $this->db->from($this->DBtables);

        if($search_string){

            $this->db->like('brand_name', $search_string);       
        }

        if($order){

            $this->db->order_by($order, $order_type);

        }else{

            $this->db->order_by('brand_id', $order_type);
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

    public function get_Slider($id = null , $limitstart = null , $limitend = null){
        
        $this->db->select('*');
        $this->db->from($this->DBtables);
        $this->db->order_by("slider_id", "asc");
        if(isset($id)){

            $this->db->where('slider_id', $id); 
        }
        if(isset($limitstart)){

            $this->db->limit($limitstart,$limitend); 
        }

        $query = $this->db->get(); 
        return $query->result_array();
            
    }

    public function get_Team_Name(){
        
        $this->db->select('team_name');
        $this->db->from($this->DBtables);
        $this->db->order_by("team_name", "desc");
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

        $this->db->where('slider_id', $id);
        $this->db->delete($this->DBtables);
    }

    public function count_team( $search_string=null, $order=null){

        $this->db->select('*');
        $this->db->from('team');

        if($search_string){

            $this->db->like('team_name', $search_string);
            $this->db->or_like('division', $search_string);
        }
        if($order){

            $this->db->order_by($order, 'Asc');

        }else{

            $this->db->order_by('team_id', 'Asc');

        }

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_slider(){

        return $this->db->count_all($this->DBtables);

    }

    public function rrmdir($dir) {

        if(is_dir($dir)) {

             $objects = scandir($dir);

             foreach ($objects as $object) {
               if ($object != "." && $object != "..") {
                 if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
               }
             }

             reset($objects);
             rmdir($dir);
        }
    }
   
 
}

?>  
