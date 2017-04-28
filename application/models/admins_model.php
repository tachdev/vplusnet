<?php

class Admins_model extends CI_Model {

	var $DBtables;
    var $INDEXtables;

    public function __construct(){

        $this->load->database();
        $this->DBtables = 'membership';
        $this->INDEXtables = 'id';
    }

	public function validate($user_name, $password ){

		$this->db->select('*');
		$this->db->where('email', $user_name);
		$this->db->where('password', $password);
		$query = $this->db->get('administrator');

		
		if($query->num_rows == 1 )
		{
			return true;

		}else{

			return false;
		}			
	}


	public function get_db_session_data($session_id){	

		$this->db->select('user_data');
		$this->db->where('session_id', $session_id);
		$query = $this->db->get('ci_sessions');
		$user = array(); /* array to store the user data we fetch */
		foreach ($query->result() as $row)
		{
		    $udata = unserialize($row->user_data);
		    /* put data in array using username as key */
		    $user['user_name'] = $udata['user_name']; 
		    $user['is_logged_in'] = $udata['is_logged_in']; 
		}
		return $user;

	}

	public function del_db_session_data(){

		$expire = now()-1800;
		$this->db->where('last_activity <', $expire );
        $this->db->delete('ci_sessions');

	}
    /**
    * Store the new user's data into the database
    * @return boolean - check the insert
    */	
	public function create_member(){

		$this->db->where('user_name', $this->input->post('username'));
		$nameQuery = $this->db->get('membership');

		$this->db->where('email_address', $this->input->post('email_address'));
		$emailQuery = $this->db->get('membership');

		$checkNameQuery = $nameQuery->num_rows;
		$checkEmailQuery = $emailQuery->num_rows;

		$name = $this->input->post('username');
		$auth = 0;
		$role_id = 0;
		$active = 1;
		$banned = 0;
		$first_name = " ";
		$last_name = " ";

		if($this->input->post('admin')){

			$auth = $this->input->post('auth');
			$role_id = $this->input->post('role_admin');
			$active = $this->input->post('active');
			$banned = $this->input->post('banned');
			$first_name = $this->input->post('firstname');
			$last_name = $this->input->post('lastname');
		}

        if( $checkNameQuery > 0 ){
        	
        	return 2;

		}elseif($checkEmailQuery > 0 ){

			return 3;

		}else{

			$new_member_insert_data = array(

				'email_address' => $this->input->post('email_address'),			
				'user_name' => $name,
				'pass_word' => md5($this->input->post('password')),
				'salt' => $this->genSalt(),
				'first_name' => $first_name,
				'last_name' =>  $last_name,
				'create_date' => date('Y-m-d H:i:s',now()),
				'last_login' => date('Y-m-d H:i:s',now()),
				'auth' => $auth,
				'role_id' => $role_id,
				'active' => $active,
				'banned' => $banned

			);

			if($this->db->insert('membership', $new_member_insert_data)){

				if($this->create_membership_info($name) == 1){

					$result['name'] = $name;
					$result['success'] = 1;

		    		return $result;


				}
			}
		
		}
	      
	}

	public function create_membership_info($username){

			$this->db->select('id');
    	 	$this->db->where('user_name', $username);
			$query = $this->db->get('membership');

			foreach($query->result() as $data ){

    	     	$arr['id'] = $data->id;

    	 	}

    	 	$new_member_insert_stat = array('id' => $arr['id']);
    	 	$this->db->insert('membership_info', $new_member_insert_stat);

			return 1;

	}

	public function getUserProfile($username){

		 $this->db->select('id,email_address,first_name,last_name,image_small,shortname');
    	 $this->db->where('user_name', $username);
		 $query = $this->db->get('membership');

		 foreach ($query->result() as $data ) {
    	     	
    	     	$arr['id'] = $data->id;
    	     	$arr['username'] = $username;
    	     	$arr['email_address'] = $data->email_address;
    	     	$arr['first_name'] = $data->first_name;
    	     	$arr['last_name'] = $data->last_name;
    	     	$arr['image_small'] = $data->image_small;
    	     	$arr['shortname'] = $data->shortname;
    	 }

		return $arr;

	}


	public function getUserProfileID($id){

		 $this->db->select('*');
    	 $this->db->where('id', $id);
		 $query = $this->db->get('membership');

		 foreach ($query->result() as $data ) {
    	     	
    	     	$arr['id'] = $data->id;
    	     	$arr['username'] = $data->user_name;
    	     	$arr['password'] = $data->pass_word;
    	     	$arr['email_address'] = $data->email_address;
    	     	$arr['first_name'] = $data->first_name;
    	     	$arr['last_name'] = $data->last_name;
    	     	$arr['auth'] = $data->auth;
    	     	$arr['role_id'] = $data->role_id;
    	     	$arr['active'] = $data->active;
    	     	$arr['banned'] = $data->banned;
    	     	$arr['image_small'] = $data->image_small;
    	     	$arr['shortname'] = $data->shortname;
    	 }

		return $arr;

	}

	public function getUserInfoID($id){

		 $this->db->select('*');
		 $this->db->from('membership');
		 $this->db->where('membership.id', $id);
		 $this->db->join('membership_info', 'membership_info.id = membership.id');
		 $query = $this->db->get();
		 $arr = $query->result_array();

		return $arr;

	}

	public function getUserComment($id){

		 $this->db->select('*');
		 $this->db->from('comments');
		 $this->db->limit(30);
		 $this->db->order_by("date_comment", "desc");
		 $query = $this->db->get();

		 return $query->result_array();


	}

	public function checkAuthData($salt,$username)
	{

		$array = array('user_name' => $username , 'salt' => $salt , 'auth' => 0);
		$this->db->where($array);
		return $query = $this->db->get('membership'); 

	}

	public function changeAuthData($username){

		$data = array('auth' => 1);
		$this->db->where('user_name', $username);
		return $this->db->update('membership', $data);
		 
	}

	public function genSalt(){

		$msg = date("Yzhis");
		return hash('crc32b',$msg);

	}

	public function updateImagePath($id , $NewImageName){

        $data = array(

              'image_small' => $NewImageName
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

