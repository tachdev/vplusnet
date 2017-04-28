<?php 
class Payment_manager extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
     
        if(!$this->session->userdata('is_logged_in')){

            redirect('t2rproject/payment_manager_view');
        }

        $this->load->model('users_model');
        $this->load->model('uploadImage_model');
        $this->load->model('site_model');

        $this->session_data = $this->users_model->get_db_session_data($this->session->userdata('session_id'));

        if(empty($this->session_data)){

            redirect('t2rproject/user');
            
        }

        $this->userProfile = $this->users_model->getUserProfile($this->session_data['user_name']);

    }
 
    /**
    * Load the main view with all the current model model's data.
    * @return void
    */
    public function index(){

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

        $this->load->view('t2rproject/element/head',$data);
        $this->load->view('t2rproject/element/nav',$user);
        $this->load->view('t2rproject/element/sidebar');
        $this->load->view('t2rproject/payment_manager_view',$data);


    }
    public function Edit(){		 

    	
       
    }
    
}