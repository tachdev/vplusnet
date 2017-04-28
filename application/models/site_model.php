<?php
class Site_model extends CI_Model {
 


    public function __construct()
    {
        $this->load->database();

    }

    public function getSiteInfo(){

    	$this->db->select('*');
        $this->db->from('site_config');
		$this->db->where('s_id', 1); 
        $query = $this->db->get();         
        return $query->result_array();
        
    }

    public function updateSiteConfig(){
        
    	$data = array(

                'page_title' => $this->input->post('pagetitle'),         
                'email' => $this->input->post('email'),
                'password' => base64_encode($this->input->post('password')),
                'meta_desc' => $this->input->post('description'),
                'meta_keyword' => $this->input->post('keyword'),
                'facebook_url' => $this->input->post('facebookurl'),
                'address' => $this->input->post('address'),
                'telephone' => $this->input->post('telephone'),

        );

        $this->db->where('s_id', 1);
        $this->db->update('site_config', $data);

        $report['error'] = $this->db->_error_number();
        echo $report['message'] = $this->db->_error_message();
        if($report !== 0){

            return true;

        }else{

            return false;
        }

            
    }


 
}
