<?php
class Membership_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

    public function get_membership( $role_id=null, $search_string=null , $order=null, $order_type='Asc', $limit_start, $limit_end)
    {
	    
		$this->db->select('membership.id');
		$this->db->select('membership.email_address');
		$this->db->select('membership.user_name');
		$this->db->select('membership.last_login');
		$this->db->select('membership.auth');
		$this->db->select('membership.active');
		$this->db->select('membership.role_id');
		$this->db->select('membership.banned');
		$this->db->from('membership');

		if($role_id != null && $role_id != 0){

			if($role_id == 1 || $role_id == 2 ){

				$this->db->where('role_id', $role_id );		

			}elseif($role_id == 3){

				$this->db->where('auth', 0 );

			}elseif($role_id == 4){

				$this->db->where('active', 0 );

			}elseif($role_id == 5){

				$this->db->where('banned', 1 );

			}			

		}
		if($search_string){

			$this->db->like('user_name', $search_string);
			$this->db->or_like('email_address', $search_string);		

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

    function count_membership($role_id=null, $search_string=null, $order=null){

		$this->db->select('*');
		$this->db->from('membership');

		if($role_id != null && $role_id != 0){

			$this->db->where('role_id', $role_id);

		}

		if($search_string){

			$this->db->like('user_name', $search_string);
			$this->db->or_like('email_address', $search_string);
		}
		if($order){

			$this->db->order_by($order, 'Asc');

		}else{
		    $this->db->order_by('id', 'Asc');
		}

		$query = $this->db->get();
		return $query->num_rows();

    }
    /**
    * Update product
    * @param array $data - associative array with data to store
    * @return boolean
    */
    function update_membership($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('membership', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}

    /**
    * Delete product
    * @param int $id - product id
    * @return boolean
    */
	function delete_membership($id){

		$arr = $this->getUserName($id);
		$this->rrmdir('assets/img_user/'.$arr[0]['user_name']);

		$this->db->where('id', $id);
		$this->db->delete('membership');


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
	
	function getUserName($id){

		$this->db->select('membership.user_name');
		$this->db->where('id', $id);
		$this->db->from('membership');
		$query = $this->db->get();
		
		return $query->result_array(); 

	}

	function create_member(){

		$this->load->library('form_validation');
		
		// field name, error message, validation ruleง
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[7]|max_length[12]|xss_clean|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[7]|max_length[12]|xss_clean|alpha_numeric');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]|alpha_numeric');
		$this->form_validation->set_rules('firstname', 'Fist Name', 'trim|min_length[4]|max_length[12]|alpha');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|min_length[4]|max_length[12]|alpha');
		$this->form_validation->set_rules('shortname', 'Short Name', 'trim|min_length[4]|max_length[12]');

		
		if($this->form_validation->run() == FALSE)
		{		
			$error['message'] = validation_errors();
			$error['result'] = false;
 			return $error;

		}else{


			$this->load->model('users_model');
			$query = $this->users_model->create_member();

			mkdir('assets/img_user/'.$query['name']);

			return "success";
			
		}

		

	}
	function validate_credentials()
	{	

		$this->load->model('users_model');
		$user_name = $this->input->post('user_name');
		$password = $this->__encrip_password($this->input->post('password'));
		$is_valid = $this->users_model->validate($user_name, $password);
		
		
		if($is_valid == true)
		{

			$data = array(			
				'user_name' => $user_name,
				'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect('admindevil/dashboard');


		}elseif($is_valid == 2){


			$data['message_error'] = "คุณยังไม่ได้ยืนยัน Account";
			$this->load->view('admin/login', $data);



		}else{ // incorrect username or password

			$data['message_error'] = "กรอก username หรือ password ไม่ถูกต้อง";
			$this->load->view('admin/login', $data);
		
		}
	}	


  
 
}
?>	
