<?php

class Admin extends CI_Controller {

    var $userProfile;

    public function __construct(){

    	parent::__construct();
     	$this->load->model('admins_model');
     	$this->load->model('site_model');
     	$this->userProfile = $this->session->all_userdata();
    }

	public function index(){

		parent::__construct();

		if($this->session->userdata('admin_login')){


			redirect('backoffice/admin/sitemanager');

        }else{

			$this->admins_model->del_db_session_data();
        	$this->load->view('admin/login');	

        }

	}

    protected function __encrip_password($password) {

        return md5($password);

    }	


	public function validate_credentials(){	

	 	if($this->input->server('REQUEST_METHOD') === 'POST'){

			$this->form_validation->set_rules('user_name', 'email address', 'trim|valid_email|xss_clean');
			$this->form_validation->set_rules('password', 'password', 'trim|xss_clean|max_length[12]');
			if($this->form_validation->run() == FALSE){

				$this->load->view('admin/login');

			}else{
					$user_name = $this->input->post('user_name');
					$password = $this->__encrip_password($this->input->post('password'));				
					$is_valid = $this->admins_model->validate($user_name, $password);
							
					if($is_valid == true){

						$data = array('user_name' => $user_name,'admin_login' => true);
						
						$this->session->set_userdata($data);
						redirect('backoffice/admin/sitemanager');


					}else{ // incorrect username or password

						$data['message_error'] = "กรอก username หรือ password ไม่ถูกต้อง";
						$this->load->view('admin/login', $data);
					
					}
			}

		}
	}

	public function sitemanager(){


			if($this->session->userdata('admin_login')){

				if($this->input->server('REQUEST_METHOD') === 'POST'){
	           

				        $this->form_validation->set_rules('email', 'email address', 'trim|valid_email|xss_clean');

				        if($this->form_validation->run() == FALSE){ 

				             $data['message_error'] = validation_errors();

				        }else{

				        	$success = $this->site_model->updateSiteConfig();

				    		if($success = 1){

				    			$data['message_success'] = 1;
				    		}

				        }

	    		
	    		} 

		    	$css = '<link rel="stylesheet" href="'.base_url().'assets/css/bootstrap-select.css">';
		        $data['css'] = $css;

		        $user['userProfile'] = $this->userProfile;
		        $data['site'] = $this->site_model->getSiteInfo();

		        $this->load->view('admin/element/head',$data);
		        $this->load->view('admin/element/nav',$user);
		        $this->load->view('admin/element/sidebar');
		        $this->load->view('admin/site_manager',$data);

            
        	}else{
				
        		redirect('backoffice');
	    	}


	        
	}


	public function get_auth(){

		$this->load->model('admins_model');

	
		if($this->uri->segment(4) && $this->uri->segment(5)){

			$auth = $this->admins_model->checkAuthData($this->uri->segment(4), $this->uri->segment(5));

			if( $auth->num_rows > 0){

				 $checkauth = $this->admins_model->changeAuthData($this->uri->segment(5));
				 if($checkauth == 1){

				 	$data['success'] = "Account ของคุณพร้อมใช้งานเเล้ว";
					$this->load->view('admin/login',$data);
					
				 }

			}else{

				$data['message_error'] = "code ยืนยัน account ไม่ถูกต้อง";
				$this->load->view('admin/login',$data);
				
			}

		}else{


			redirect('backoffice');

		}

	}
	
	public function logout(){	

		$this->session->sess_destroy();
		redirect('backoffice');
	}


}