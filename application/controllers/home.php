<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){

		if($this->input->server('REQUEST_METHOD') === 'POST'){

			$this->form_validation->set_rules('mobile', 'เบอร์โทรศัพท์' , 'trim|xss_clean|required|numeric|min_length[10]|max_length[10]|callback_mobile_check');
			$this->form_validation->set_rules('email' , 'อีเมล'  , 'trim|xss_clean|valid_email|required|min_length[5]|max_length[50]');
			$this->form_validation->set_rules('password' , 'พาสเวิร์ด' , 'trim|xss_clean|required|min_length[8]|max_length[15]|alpha_numeric');
			$this->form_validation->set_rules('password2', 'ยืนยันรหัสผ่าน', 'trim|xss_clean|required|min_length[8]|max_length[15]|matches[password]|alpha_numeric');
			$this->form_validation->set_rules('name', 'ชื่อ', 'trim|xss_clean|required|min_length[3]|max_length[15]');
			$this->form_validation->set_rules('surname', 'นามสกุล', 'trim|xss_clean|required|min_length[3]|max_length[15]');
			$this->form_validation->set_rules('national_id', 'รหัสบัตรประชาชน 13 หลัก', 'trim|xss_clean|required|numeric|min_length[13]|max_length[13]');
			$this->form_validation->set_message('required', '%s ยังไม่ได้ระบุ');
			$this->form_validation->set_message('numeric', '%s ต้องเป็นตัวเลขเท่านั้น');
			$this->form_validation->set_message('max_length', '%s ต้องตัวเลขไม่มากกว่า %s ตัว');
			$this->form_validation->set_message('min_length', '%s ต้องมีตัวเลขไม่น้อยกว่า %s ตัว');			
			$this->form_validation->set_message('matches', '%s ต้องตรงกัน');
			$this->form_validation->set_message('alpha_numeric', '%s ต้องเป็นภาษาอังกฤษหรือตัวเลขเท่านั้น');


			if($this->form_validation->run() == FALSE){ 

		        $data['message_error'] = validation_errors();

		        $this->load->model('slider_model');
				$this->load->model('site_model');

				$data['slider'] = $this->slider_model->get_Slider();
				$site['site'] = $this->site_model->getSiteInfo();

				$this->load->view('element/header',$site);
				$this->load->view('element/nav');
				$this->load->view('home_view' , $data);
				$this->load->view('element/footer', $site );

		    }else{

		    	$this->load->model('t2r_model');

		   		

		    	$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));
			    if(!empty($verify)){

			    	$data_array = array( 

			    		"national_id" => $this->input->post("national_id"),
						"name"        => $this->input->post("name"),
						"surname"     => $this->input->post("surname"),
						"email"       => $this->input->post("email"),
						"mobile"      => $this->input->post("mobile"),
						"password"    => $this->input->post("password"),
						"method" 	  => "regist",
						"verify"      => $verify
					);


			    	$data['register_success'] = $this->register_api($data_array);

			    	if($data['register_success'] == true){

			    		$mobile = $this->input->post("mobile");
					    $email = $this->input->post("email");
					    $password = $this->input->post("password");
					    $firstname = $this->input->post("name");
					    $lastname = $this->input->post("surname");
					    $id_card_number = $this->input->post("national_id");
			    		$success = $this->t2r_model->insertcustomer($mobile,$email,$password,$firstname,$lastname,$id_card_number);
			    		
			    		if($success == 1){
			    			$this->sendRegisterMail($mobile,$email,$firstname,$lastname,$id_card_number);
			    	  		$check_login = $this->t2r_model->check_login($mobile,$password);
			    
					    	if(!empty($check_login)){

					    	    $mobile     = $check_login['0']['mobile'];
					   			$firstname  = $check_login['0']['first_name'];
					    		$lastname   = $check_login['0']['last_name'];
					    		$email   = $check_login['0']['email'];
								$this->validate_credentials($mobile,$firstname,$lastname,$email);

								redirect('customer/user/buymain');

						    }else{

						    		$data['message_error'] = "เบอร์โทรศัพท์หรือรหัสผ่านของคุณไม่ถูกต้อง";
						    }


							



			    		}
			    		
			    	}else{

			    		//print_r($json);
			    		$data['message_error'] = "เกิดข้อผิดพลาดลงทะเบียนไม่สำเร็จ";

			    	}	
			    	
			    }


		   		
			   	
			  

			    
			    /*$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));
			    if(!empty($verify)){

			    	$data_array = array( 

						"name"        => $this->input->post("name"),
						"surname"     => $this->input->post("surname"),
						"national_id" => $this->input->post("national_id"),
						"email"       => $this->input->post("email"),
						"mobile"      => $this->input->post("mobile"),
						"password"    => $this->input->post("password"),
						"method" 	  => "regist",
						"verify"      => $verify,
					);


			    	$data['register_success'] = $this->vplusapi->apiconnect($data_array);

			    	print_r($data['register_success'] );
			    	//$this->sendEmailValid();
			    }*/
			    	
		    }
		    
		}else{

			$this->load->model('slider_model');
			$this->load->model('site_model');

			$data['slider'] = $this->slider_model->get_Slider();
			$site['site'] = $this->site_model->getSiteInfo();

			$this->load->view('element/header',$site);
			$this->load->view('element/nav');
			$this->load->view('home_view' , $data);
			$this->load->view('element/footer', $site );
		}

		
	}

	protected function sendRegisterMail($mobile,$email,$firstname,$lastname,$id_card_number){

		$data['mobile']    =  $mobile;
		$data['firstname'] =  $firstname;
		$data['lastname']  =  $lastname;
		$data['email']     =  $email;
		$data['id']        =  $id_card_number;

        $config['useragent']    = 'CodeIgniter';
		$config['protocol']     = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.googlemail.com';
		$config['smtp_user']    = $this->email_admin; // Your gmail id
		$config['smtp_pass']    = $this->email_pass; // Your gmail Password
		$config['smtp_port']    = 465;
		$config['wordwrap']     = TRUE;    
		$config['wrapchars']    = 76;
		$config['mailtype']     = 'html';
		$config['charset']      = 'utf-8';
		$config['validate']     = FALSE;
		$config['priority']     = 3;
		$config['newline'] = "\r\n";
		$config['crlf']    = "\n"; 

		$this->load->library('email');
		$this->email->initialize($config);
		$mesg = $this->load->view('travel/register_email_view',$data,true);

		$this->email->from( $this->email_admin , 'Vplusnet');
		$this->email->to($email); 
		$this->email->cc($this->email_admin); 

		$this->email->subject("คุณ ".$firstname." ได้ทำการ register หมายเลข ".$mobile." เเล้ว" );
		$this->email->message($mesg);    

		$this->email->send();

	}

	protected function register_api($data_array){

		$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));

	    if(!empty($verify)){

	    	$this->load->library('vplusapi');
	    	$data['register_success'] = $this->vplusapi->apiconnect($data_array);
	    	$json = json_decode(rtrim($data['register_success']) , true);

	    	if($json['status'] == "Success" &&  $json['code'] != ""){

	    			return true;
	    	}else{

	    			return $json;
	    	}
 

	    }

	}

	protected function validate_credentials($mobile,$firstname,$lastname,$email){	


			$data = array(

				'mobile' => $mobile,
				'firstname' => $firstname,
				'lastname'  => $lastname,
				'email'  => $email,
				'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect('customer/user/main');

	}

	public function mobile_check($str){
		$this->load->model('t2r_model');
		$str = $this->t2r_model->checkDuplicateEmail($str);

		if ($str == 1){

			$this->form_validation->set_message('mobile_check', '%s ถูกใช้สมัครเเล้ว');
			return FALSE;

		}else{

			return TRUE;
		}

	}

	public function sendMail($email){


		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'email address', 'trim|valid_email|xss_clean|required');
		$this->form_validation->set_rules('name', 'name', 'trim|xss_clean|required');
		$this->form_validation->set_rules('title', 'title', 'xss_clean|required');
		$this->form_validation->set_rules('comments', 'messages', 'xss_clean|required|max_length[500]');

		if($this->form_validation->run() == FALSE){ 

	        return $data['message_error'] = validation_errors();

	    }


		$emailfrom = $this->input->post('email');
		$name      = $this->input->post('name');
		$title     = $this->input->post('title');
		$comments  = $this->input->post('comments');

		$this->load->library('email');

		$this->email->from( $emailfrom , $name );
		$this->email->to($email); 
		$this->email->subject($title);
		$this->email->message($comments);	

		if($this->email->send()){

			return 1;

		}else{

			return 2;
		}

	}

	public function testmail(){


		   // Set SMTP Configuration
		   $config = Array(
			  'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 465,
			  'smtp_user' => '5.four.one@gmail.com', // change it to yours
			  'smtp_pass' => 'sai0246069', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
		  );
		 
		  $this->load->library('email', $config);
		  $this->email->set_newline("\r\n");
		  $this->email->from('5.four.one@gmail.com'); // change it to yours
		  $this->email->to('rabbit_crew69@hotmail.com'); // change it to yours
		  $this->email->subject('Email using Gmail.');
		  $this->email->message('Working fine ! !');
		 
		 if($this->email->send()){

		  	echo 'Email sent.';

		 }else{

		 	show_error($this->email->print_debugger());
		 }
		

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */