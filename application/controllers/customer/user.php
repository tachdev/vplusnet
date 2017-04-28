<?php

class User extends CI_Controller {

	protected $email_admin = 'smartvoicetravel@gmail.com';
	protected $email_pass = 'Vplus1234';
	protected $key = "vplusnet";
	protected $merchantid = "200002947084";
	protected $payforu_api = "https://202.43.47.14/paymentgateway/creditcard";

    public function __construct(){

        parent::__construct();
        $this->load->library('vplusapi');
        $this->load->library('encrypt');
        $this->load->model('t2r_model');
        $this->load->model('price_model');
        $this->session_data = $this->session->all_userdata();

    }

    public function testapi(){

    	$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));
	    
	    if(!empty($verify)){


			$data_array = array( 

 						"method" => "get_did",
						"verify" => $verify,
						"mobile" => '0891234568',
						"pack_id" => 1,
 						"trans_id" => '20161017032999',
 						"pay_method" => 'bank'
			);


	    	$data['package_success'] = $this->vplusapi->apiconnect($data_array);
	    	$json = json_decode(rtrim($data['package_success']) , true);

			print_r($json);
	    }


	    $data_array = array( 

						"method"      => "order",
						"verify"      => $verify,
						"mobile"      => '0891254567',
						"startdate"   => date("Y-m-j", strtotime(now())),
						"pack_id"     => 1,
						"trans_id"    => '20161017032999',
						"pay_method"  => 'bank'
		);

	    echo $data_array['trans_id'];
	    $data['package_success'] = $this->vplusapi->apiconnect($data_array);
    	$json = json_decode(rtrim($data['package_success']) , true);

    	print_r($json);


    	//$login = $this->detail_api($data_array);


    }


	protected function register_api($national_id,$name,$surname,$email,$mobile,$password){

		$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));

	    if(!empty($verify)){


	    	$data_array = array( 

				"method" 	  => "regist",
	    		"national_id" => $national_id,
				"name"        => $name,
				"surname"     => $surname,
				"email"       => $email,
				"mobile"      => $mobile,
				"password"    => $password,
				"verify"      => $verify,
						
			);

	    	$data['register_success'] = $this->vplusapi->apiconnect($data_array);
	    	$json = json_decode(rtrim($data['register_success']) , true);

	    	if($json['status'] == "Success" &&  $json['code'] != ""){

	    			return true;
	    	}else{

	    			return $json;
	    	}
 

	    }

	}

	protected function order_api($mobile,$startdate,$pack_id,$trans_id,$pay_method){


			$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));

			if(!empty($verify)){

				$data_array = array( 

							"method"      => "order",
							"verify"      => $verify,
							"mobile"      => $mobile,
							"startdate"   => $startdate,
							"pack_id"     => $pack_id,
							"trans_id"    => $trans_id,
							"pay_method"  => $pay_method

				);

		    	$data['package_success'] = $this->vplusapi->apiconnect($data_array);
		    	return $json = json_decode(rtrim($data['package_success']) , true);

	    	}
	}


    protected function update_order_api($mobile,$pack_id,$tran_id,$pay_method){

		$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));
	    if(!empty($verify)){

	    	$data_array = array( 

 						"method" => "update_order",
						"verify" => $verify,
						"mobile" => $mobile,
						"pack_id" => $pack_id,
 						"trans_id" => $tran_id,
 						"pay_method" => $pay_method
			);

	    	$data['package_success'] = $this->vplusapi->apiconnect($data_array);
	    	return $json = json_decode(rtrim($data['package_success']) , true);
	    	//print_r($json);

	    }

	}

	public  function usage_customer_api(){

		if($this->input->server('REQUEST_METHOD') === 'POST'){

			$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));
		    if(!empty($verify)){

		    	$password = md5('0868966386');
		    	$data_array = array( 

							"method"   => "check_CDR",
							"verify"   => $verify,
							"mobile"   => $this->input->get_post('mobile'   , TRUE),
							"password" => md5($this->input->get_post('password'   , TRUE)) 
				);


		    	$data['login_success'] = $this->vplusapi->apiconnect($data_array);
		    	$json = json_decode(rtrim($data['login_success']) , true);
		    	$arrayName = array('data' => $json['data']   );
		    	echo json_encode($arrayName);

		
		    }

		}

	}

	public function package_api(){

		$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));
	    if(!empty($verify)){

	    	$data_array = array( 

						"method" 	  => "package_list",
						"verify"      => $verify,
			);

	    	$data['package_success'] = $this->vplusapi->apiconnect($data_array);
	    	return $json = json_decode(rtrim($data['package_success']) , true);

	    }

	}

	protected function detail_api($data_array){

		$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));
	    if(!empty($verify)){

	    	$data['login_success'] = $this->vplusapi->apiconnect($data_array);
	    	return $json = json_decode(rtrim($data['login_success']) , true);
	    }

	}

	

	public function get_did_number($mobile,$pack_id,$tran_id,$pay_method){

		$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));
	    if(!empty($verify)){

			$data_array = array( 

 						"method" => "get_did",
						"verify" => $verify,
						"mobile" => $mobile,
						"pack_id" => $pack_id,
 						"trans_id" => $tran_id,
 						"pay_method" => $pay_method
			);

	    	$data['package_success'] = $this->vplusapi->apiconnect($data_array);
	    	return $json = json_decode(rtrim($data['package_success']) , true);

	    }

	}

	public function index(){

		$data = null; 
		if($this->input->server('REQUEST_METHOD') === 'POST'){

		  $timeout = $this->check_access($this->session->userdata('last_login'),300);
		  if($timeout != 'a'){ 

		  	$data['message_error'] = "คุณสามารถ Login ได้อีกครั้งอีก  ".$timeout."  นาที"; 

		  }else{

				$this->form_validation->set_rules('mobile', 'เบอร์โทรศัพท์', 'trim|xss_clean|required|numeric|min_length[10]|max_length[10]');
				$this->form_validation->set_rules('password' , 'พาสเวิร์ด' , 'trim|xss_clean|required|min_length[8]|max_length[15]');
				$this->form_validation->set_message('required', '%s ยังไม่ได้ระบุ');
				$this->form_validation->set_message('numeric', '%s ต้องเป็นตัวเลขเท่านั้น');
				$this->form_validation->set_message('min_length', '%s ต้องมีความยาวไม่น้อยกว่า %s');
				$this->form_validation->set_message('max_length', '%s ต้องมีความยาวไม่เกิน %s');

				if($this->form_validation->run() === FALSE){ 

					$this->count_login();
			        $data['message_error'] = validation_errors();
			    }

			    $verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));
			    
			    if(!empty($verify)){

			    	$data_array = array( 

						"mobile"      => $this->input->post("mobile"),
						"password"    => $this->input->post("password"),
						"method" 	  => "user_details",
						"verify"      => $verify,
					);

			    	$login = $this->detail_api($data_array);

			    	if($login['status'] == "Success" && $login['code'] != ""){

			    		//$update = $this->t2r_model->updateCustomer($this->input->post("mobile"),$login['email'],$login['name'],$login['surname'],$login['national_id'],$login['credit']);

		    			$check_login = $this->t2r_model->check_login($this->input->post("mobile"),$this->input->post("password"));
	    
					    if(!empty($check_login)){

					    	if($check_login['0']['role'] == 2){

					    		$this->session->unset_userdata('mobile');
					    		$mobile     = $check_login['0']['mobile'];
					   			$firstname  = $check_login['0']['first_name'];
					    		$lastname   = $check_login['0']['last_name'];
					    		$email      = $check_login['0']['email'];
					    		
								$this->validate_credentials($mobile,$firstname,$lastname,$email);

					    	}elseif($check_login['0']['role'] >= 3){

					    		$this->session->set_userdata('mobile', $this->input->post("mobile"));
					    		$data['message_error'] = "account ของคุณถูกระงับ";

					    	}elseif($check_login['0']['role'] == 1){

					    		$this->session->set_userdata('mobile', $this->input->post("mobile"));
					    		$data['message_error'] = "คุณยังไม่ได้ verified account";
					    	}

					    }else{
					    		$this->session->set_userdata('mobile', $this->input->post("mobile"));
					    		$data['message_error'] = "เบอร์โทรศัพท์หรือรหัสผ่านของคุณไม่ถูกต้อง";
					    }

			    	}else{

			    		$this->session->set_userdata('mobile', $this->input->post("mobile"));
			    		$data['message_error'] = "เบอร์โทรศัพท์หรือรหัสผ่านของคุณไม่ถูกต้อง";
			    	}

			    	
			    }

			}

		}

		if($this->session->userdata('is_logged_in')){

				redirect('customer/user/main');
        }else{
				
        		$this->load->view('travel/login_view',$data);
        }


	}

	protected function check_admin($username ,$password){





	}

	/*public function check_fopen(){

		$fp = fsockopen("www.google.com", 80, &$errno, &$errstr, 10); // work fine
		if (!$fp)
		    echo "www.google.com -  $errstr   ($errno)<br>\n";
		else
		    echo "www.google.com -  ok<br>\n";


		$fp = fsockopen("smtp.gmail.com", 465, &$errno, &$errstr, 10); // NOT work
		if (!$fp)
		    echo "smtp.gmail.com 465  -  $errstr   ($errno)<br>\n";
		else
		    echo "smtp.gmail.com 465 -  ok<br>\n";


		$fp = fsockopen("smtp.gmail.com", 587, &$errno, &$errstr, 10); // NOT work
		if (!$fp)
		    echo "smtp.gmail.com 587  -  $errstr   ($errno)<br>\n";
		else
		    echo "smtp.gmail.com 587 -  ok<br>\n";

	}*/



	protected function count_login(){

		if(!$this->session->userdata('login_time')){

				$this->session->set_userdata('login_time' , 1 );

		}else{

				if($this->session->userdata('login_time') == 4){

					$this->session->set_userdata('last_login', strtotime("now"));
					$this->session->set_userdata('login_time', 0);
					return 'yes';

				}else{

					$login_time = $this->session->userdata('login_time');
					$this->session->set_userdata('login_time' , $login_time+1 );
					return 'no';

				}			
		}

	}



	

	protected function validate_credentials($mobile,$firstname,$lastname,$email){	

			//$this->session->sess_destroy();

			$data = array(

				'mobile' => $mobile,
				'firstname' => $firstname,
				'lastname'  => $lastname,
				'email'  => $email,
				'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
	}

	public function destroy_session(){

		if($this->session->userdata('is_logged_in')){

			$this->session->sess_destroy();
			redirect('customer/user');

		}

	}

	public function main(){

		if($this->session->userdata('is_logged_in')){

			$data['mobile']    =  $this->session_data['mobile'];
			$data['firstname'] =  $this->session_data['firstname'];
			$data['lastname']  =  $this->session_data['lastname'];
			$data['email']     =  $this->session_data['email'];
			$data['package_active']   = $this->t2r_model->get_package_active($data['mobile']);
			
			if(isset($data['package_active']['0']['package_active'])){

				$data['check']     = $this->t2r_model->check_package_expire($data['mobile'],$data['package_active']['0']['package_active']);				
				if($data['check'] != 2){

					$data['package']   = $this->t2r_model->get_current_package($data['mobile'],$data['package_active']['0']['package_active']);	
				}
				
				
			}
			
			

			/*if($data['check'] == 1 || $data['check'] == 2 ){
			
				$this->load->view('travel/element/head');
				$this->load->view('travel/main_view',$data);

			}else{

				$this->load->view('travel/element/head');
				$this->load->view('travel/buymain_view',$data);

			}*/
			

			$this->load->view('travel/element/head');
			$this->load->view('travel/main_view',$data);
	
			/*if(!empty($data['package'])){

				$data['current_package_detail'] = $this->t2r_model->getOrderDetail($data['current_package']['0']['order_id']);
			}*/

			

        }else{

        	redirect('customer/user');
        }
		
	}

	public function buymain(){

		if($this->session->userdata('is_logged_in')){

		$this->load->view('travel/element/head');
		$this->load->view('travel/buymain_view');

		}

	}

	public function printinvoice(){

		$tran_id = $this->decode($this->uri->segment(4));
		$data['print_view'] = $this->t2r_model->get_order_data($tran_id);

		if(!empty($data['print_view'])){

			/*$data['mobile']    =  $this->session_data['mobile'];
			$data['firstname'] =  $this->session_data['firstname'];
			$data['lastname']  =  $this->session_data['lastname'];
			$data['email']     =  $this->session_data['email'];
			$data['country']   =  $this->session_data['country'];
			$data['package']   =  $this->session_data['package'];
			$data['date_start']   =  $this->session_data['date_start'];
			$data['date_end']     =  $this->session_data['date_end'];*/

			$data['package_total'] = $this->t2r_model->getPackage($data['print_view']['0']['package_id']);

			$this->session->set_userdata('payconfirm', 1 );

			$this->load->view('travel/element/head');
			$this->load->view('travel/print_view',$data);

		}


	}

	public function register(){

		$data = null;
		$this->load->library('form_validation');


		if($this->input->server('REQUEST_METHOD') === 'POST'){


		  $timeout = $this->check_access( $this->session->userdata('last_access'), 300 );

		  if($timeout != 'a'){ 

		  	$data['message_error'] = "คุณสามารถ Register ได้อีกครั้งอีก  ".$timeout ."  นาที"; 

		  }else{


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

				$this->session->set_userdata('mobile', $this->input->post("mobile"));
				$this->session->set_userdata('email', $this->input->post("email"));
				$this->session->set_userdata('name', $this->input->post("name"));
				$this->session->set_userdata('surname', $this->input->post("surname"));
				$this->session->set_userdata('nationnal_id', $this->input->post("national_id"));
		        $data['message_error'] = validation_errors();

		    }else{

		   		
		   		$mobile = $this->input->post("mobile");
			    $email = $this->input->post("email");
			    $password = $this->input->post("password");
			    $firstname = $this->input->post("name");
			    $lastname = $this->input->post("surname");
			    $id_card_number = $this->input->post("national_id");
			   
			    $this->session->set_userdata('last_access', strtotime("now"));
			     
			    $verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));
			    
			    if(!empty($verify)){

			    		$national_id = $this->input->post("national_id");
						$name        = $this->input->post("name");
						$surname     = $this->input->post("surname");
						$email       = $this->input->post("email");
						$mobile      = $this->input->post("mobile");
						$password    = $this->input->post("password");


			    	$data['register_success'] = $this->register_api($national_id,$name,$surname,$email,$mobile,$password);

			    	if($data['register_success'] == true ){

			    		$this->session->unset_userdata('mobile');
						$this->session->unset_userdata('email');
						$this->session->unset_userdata('name');
						$this->session->unset_userdata('surname');
						$this->session->unset_userdata('nationnal_id');

			    		$this->t2r_model->insertcustomer($mobile,$email,$password,$firstname,$lastname,$id_card_number);
			    	    $data['register_success'] = "การลงทะเบียนสำเร็จ";

			    	    $this->sendRegisterMail($mobile,$email,$password,$firstname,$lastname,$id_card_number);
			    		

			    	}else{

			    		//print_r($json);
			    		$data['message_error'] = "เกิดข้อผิดพลาดลงทะเบียนไม่สำเร็จ";

			    	}	
			    	
			    }
			    	
		    }


		 }
		    
		}

			if($this->uri->segment(4) == ""){

			$this->load->view('travel/element/head');
			$this->load->view('travel/policy_view');

			}elseif($this->uri->segment(4) == 'auth'){

				
			
				$this->load->view('travel/element/head');
				$this->load->view('travel/register_view',$data);

			}




		


						
	}

	protected function check_access($last_access,$time){

			if(isset($last_access)){

				
				$time_limit	 = strtotime("now")-$last_access;
		   
				if($time_limit > $time){

					return "a";

				}else{

					$cooldown =	$time - $time_limit;
					return ceil($cooldown/60);
					
				}
			}
		   
		
	}

	public function register_approve(){
		//$this->uri->segment(4);

		if($this->uri->segment(5) != "" && $this->uri->segment(6) != ""){

			$mobile =  "0".$this->decode($this->uri->segment(5));
			$id_card_number   =  $this->decode($this->uri->segment(6));

			$update = $this->t2r_model->check_auth($mobile,$id_card_number);


			if($update == true){

				$this->status("account ".$mobile." ได้ทำการยืนยันบัญชีสำเร็จ");

			}else{

				$this->status("ไม่พบบัญชีนี้ในระบบ");
			}

		}
		
	}

	protected function status($message){

			$data = null;

			$data['message_success'] = $message;

			if(!empty($message)){

				$this->load->view('travel/element/head');
				$this->load->view('travel/status_view' , $data );	
			}
				


	}

	protected function sendRegisterMail($mobile,$email,$password,$firstname,$lastname,$id_card_number){

		$data['mobile']    =  $mobile;
		$data['firstname'] =  $firstname;
		$data['lastname']  =  $lastname;
		$data['email']     =  $email;
		$data['password']  =  $password;
		$data['id']        =  $id_card_number;
		$data['m_key']     =  $this->encode($mobile);
		$data['key']	   =  $this->encode($id_card_number);
		

		$this->load->library('email');
		$body = $this->load->view('travel/register_email_view',$data,true);


		$phpMailer = $this->email;
		$phpMailer->from($this->email_admin);
		$phpMailer->reply_to($this->email_admin);   // Optional, an account where a human being reads.
		$phpMailer->to($email);
		$phpMailer->subject("คุณ ".$firstname." ได้ทำการ register หมายเลข ".$mobile." เเล้ว");
		$phpMailer->message($body);

		if($phpMailer->Send()){

    		$this->status("คุณได้สมัครเรียบร้อยเเล้ว กรุณาเช็คอีเมล ".$email." เพื่อทำการ approve account");

		}else{

    		echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';

		}

	}

	


	public function mobile_check($str){

		$str = $this->t2r_model->checkDuplicateEmail($str);

		if ($str == 1){

			$this->form_validation->set_message('mobile_check', '%s ถูกใช้สมัครเเล้ว');
			return FALSE;

		}else{

			return TRUE;
		}

	}

	public function package(){


		if($this->session->userdata('is_logged_in')){
			
			/*$data['mobile']    =  $this->session_data['mobile'];
			$data['firstname'] =  $this->session_data['firstname'];
			$data['lastname']  =  $this->session_data['lastname'];
			$data['money']     =  $this->session_data['money'];*/
			$data['package'] = $this->package_api();
			//print_r($data['package']);

			$this->session->unset_userdata('package');
			$this->session->unset_userdata('price');
			$this->session->unset_userdata('country');
			$this->session->unset_userdata('date_start');
			$this->session->unset_userdata('date_end');
			$this->session->unset_userdata('payconfirm');
			$this->session->unset_userdata('expire');
			$this->session->unset_userdata('tran_id');
			$this->session->unset_userdata('package_ready');
			$this->session->unset_userdata('method_payment');
			$this->session->unset_userdata('order_id');

			$data['step']     =   1;
			$data['country'] = $this->t2r_model->get_country();
			
			$this->load->view('travel/element/head');
			$this->load->view('travel/package_view',$data);


        }else{

        	redirect('customer/user');
        }

	}

	public function checkout(){

		if($this->session->userdata('is_logged_in')){	

			if($this->input->server('REQUEST_METHOD') === 'POST'){


				$data['mobile']     =  $this->session_data['mobile'];
				$data['firstname']  =  $this->session_data['firstname'];
				$data['lastname']   =  $this->session_data['lastname'];
				$data['email']      =  $this->session_data['email'];
				$data['package']    =  $this->input->get_post('package'   , TRUE);
				$data['package_row'] =  $this->input->get_post('package_row'   , TRUE);
				$data['country']    =  $this->input->get_post('country'   , TRUE);
				$data['date_start'] =  $this->input->get_post('date_start', TRUE);

				$data['package_api'] = $this->package_api();
			
				if($data['package'] == "D"){


					//$data['package_total'] = $this->t2r_model->getPackage($data['package']);
					$data['expire']	= $data['package_api'][$data['package_row']]['expire_amount'];
					$data['price'] = $data['package_api'][$data['package_row']]['price'];
					$expire_day_plus = "+".$data['expire']." day";					
					$date_end = strtotime($data['date_start']);
                    $date_end = strtotime( $expire_day_plus , $date_end);
                    $date_end = date('d-m-Y', $date_end);
                    $tran_id  = date('Ymdhis');
                    
                    $data['date_end'] = $date_end;	

					$this->session->set_userdata('package', $data['package_api'][$data['package_row']]['package_id']);
					$this->session->set_userdata('country', $data['country']);
					$this->session->set_userdata('date_start', $data['date_start']);
					$this->session->set_userdata('date_end', $date_end);
					$this->session->set_userdata('price', $data['package_api'][$data['package_row']]['price']);
					$this->session->set_userdata('expire', $data['package_api'][$data['package_row']]['expire_amount']);
					$this->session->set_userdata('tran_id', $tran_id );

					//print_r($this->session->userdata);

					if($data['package'] != "" && $data['country'] !="" &&  $data['date_start'] != "" && $data['package_api'][$data['package_row']]['price'] != "" ){
						//print_r($this->session->all_userdata());
						$this->load->view('travel/element/head');
						$this->load->view('travel/checkout_view', $data);

					}
					
				}
				
			}else{

				redirect('customer/user/package');
			}

		}else{

			redirect('customer/user');

		}
				
	}

	

	public function paymentprocess(){

		if($this->session->userdata('is_logged_in')){

			if($this->input->server('REQUEST_METHOD') === 'POST'){


				$data['mobile']    =  $this->session_data['mobile'];
				$data['firstname'] =  $this->session_data['firstname'];
				$data['lastname']  =  $this->session_data['lastname'];
				$data['email']     =  $this->session_data['email'];
				$data['country']   =  $this->session_data['country'];
				$data['package']   =  $this->session_data['package'];
				$data['price']   =  $this->session_data['price'];
				$data['date_start']   =  $this->session_data['date_start'];
				$data['date_end']     =  $this->session_data['date_end'];
				$data['status']     =  1;
				$data['method_payment']     =  $this->input->get_post('optradio' , TRUE );
				$data['tran_id']     =  $this->session_data['tran_id'];
				$data['merchantcode'] = $this->merchantid;	

				$data['ref'] = $this->t2r_model->insertOrder($data);

				if( $data['ref'] != "" && $data['ref'] != -1 ){

					$data['refdate'] = date('Y-m-d');
					$data['productlist'] = "SmartVoiceTravel Package  ".$data['price']." Baht";
					$data['api'] = $this->payforu_api;
					
					$this->session->set_userdata('method_payment', $this->input->get_post('optradio' , TRUE ));
					$this->session->set_userdata('order_id', $data['ref'] );

					$payment  = array( "Credit", "SCB" , "KTB" , "BAY" , "BBL" , "CounterService" );
					
					if(in_array($data['method_payment'] , $payment)){

						$data['backurl'] =  base_url()."customer/user/checkpayment";							
						$this->load->view('travel/element/head');
						$this->load->view('travel/payforu_send_view', $data);


					}elseif($data['method_payment']  == "bank"){


						redirect('customer/user/banktranfer');
						

					}elseif($data['method_payment']  == "counterservice"){



					}

				}


			}else{

				redirect('customer/user/package');
			}

		}

		//$this->load->view('travel/element/head');
		//$this->load->view('travel/summary_view');
	}

	public function checkpayment(){

		if($this->session->userdata('is_logged_in')){

			if($this->input->server('REQUEST_METHOD') === 'POST'){

				$responsecode = $this->input->get_post('responsecode' , TRUE );
				$merchantcode = $this->input->get_post('merchantcode' , TRUE );
				$ref = $this->input->get_post('ref' , TRUE );
				$amount = $this->input->get_post('amount' , TRUE );

				if(!empty($responsecode) && $responsecode == '01'){

					if(!empty($this->session_data['package'])){

						/*if($merchantcode == $this->merchantid && $ref == $this->session_data['order_id'] && $amount == $this->session_data['price']){

							$this->session->set_userdata('payconfirm', 1 );
							$this->setup_account();
						}*/
						echo "complete payment";
					}

				}elseif(!empty($responsecode) && $responsecode == '03'){

					$this->del_preorder();
					//redirect('customer/user/package');

				}else{

					$this->del_preorder();
					//redirect('customer/user/package');
				}

			}else{

				redirect('customer/user/package');
			}
		}
	}

	protected function del_preorder(){

		$this->load->model('order_model');
		$this->load->model('customer_model');

		$order = $this->order_model->get_order($this->session_data['order_id'] , null , null);
		$customer = $this->customer_model->check_package_active($this->session_data['mobile'],$this->session_data['order_id']);
		$this->order_model->delete($this->session_data['order_id']);
		$this->session->unset_userdata('order_id');	

	}

	protected function setup_account(){

			$data['mobile']       =  $this->session_data['mobile'];
			$data['firstname']    =  $this->session_data['firstname'];
			$data['lastname']     =  $this->session_data['lastname'];
			$data['email']        =  $this->session_data['email'];
			$data['country']      =  $this->session_data['country'];
			$data['package']      =  $this->session_data['package'];
			$data['price']        =  $this->session_data['price'];
			$data['date_start']   =  $this->session_data['date_start'];
			$data['date_end']     =  $this->session_data['date_end'];
			$data['tran_id']      =  $this->session_data['tran_id'];
			$data['expire']       =  $this->session_data['expire'];
			$data['method_payment']     =  $this->session_data['method_payment'];
			$data['status']     =  3;

			$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));

			if(!empty($verify) && empty($this->session_data['package_ready'])){

	

					$mobile      = $data['mobile'];
					$startdate   = date("Y-m-j", strtotime($data['date_start']));
					$pack_id     = $data['package'];
					$trans_id    = $data['tran_id'];
					$pay_method  = $data['method_payment'];

					$order_success = $this->order_api($mobile,$startdate,$pack_id,$trans_id,$pay_method);
					
					if($order_success['status'] == "Success"){

						$this->session->set_userdata('package_ready', 1 );
						$this->sendInvoice($data);
						redirect('approve_order/tran_id/token');
						

					}else{

						redirect('customer/user/');
					}

			}

	}
	
	public function banktranfer(){


		if(!empty($this->session_data['package']) && $this->session_data['method_payment'] == "bank" ){

			$data['mobile']       =  $this->session_data['mobile'];
			$data['firstname']    =  $this->session_data['firstname'];
			$data['lastname']     =  $this->session_data['lastname'];
			$data['email']        =  $this->session_data['email'];
			$data['country']      =  $this->session_data['country'];
			$data['package']      =  $this->session_data['package'];
			$data['price']        =  $this->session_data['price'];
			$data['date_start']   =  $this->session_data['date_start'];
			$data['date_end']     =  $this->session_data['date_end'];
			$data['tran_id']      =  $this->session_data['tran_id'];
			$data['expire']       =  $this->session_data['expire'];
			$data['method_payment']     =  $this->session_data['method_payment'];
			$data['status']     =  1;

			$verify = urldecode(file_get_contents("http://27.100.7.17/_lib/verify.php"));

			if(!empty($verify) && empty($this->session_data['package_ready'])){

					$mobile      = $data['mobile'];
					$startdate   = date("Y-m-j", strtotime($data['date_start']));
					$pack_id     = $data['package'];
					$trans_id    = $data['tran_id'];
					$pay_method  = $data['method_payment'];

					$order_success = $this->order_api($mobile,$startdate,$pack_id,$trans_id,$pay_method);
					
					if($order_success['status'] == "Success"){
						

						$this->session->set_userdata('package_ready', 1 );
						$this->sendInvoice($data);


					}else{

						redirect('customer/user/');
					}

			}

			
			$data['bank_number'] = $this->t2r_model->get_bank_number();
			$data['tran_id'] = $this->encode($data['tran_id']);


			$this->load->view('travel/element/head');
			$this->load->view('travel/banktranfer_view',$data);

		}

		
	}

	protected function encode($code){

		$code = $code+1985;
		return base_convert($code , 10 , 36 );

	}

	protected function decode($code){

		
		$code = base_convert($code , 36 , 10 );
		return $code = $code-1985;

	}



	public function sendInvoice($data){
		

		$order = $this->t2r_model->get_order_data_orderid($data['tran_id']);
		$data['order_id'] = $order['0']['order_id'];
		$data['tran_id'] = $this->encode($data['tran_id']);
		$data['bank_number'] = $this->t2r_model->get_bank_number();

		$this->load->library('email');
		$body = $this->load->view('travel/invoice_email_view',$data,true);;


		$phpMailer = $this->email;
		$phpMailer->from($this->email_admin);
		$phpMailer->reply_to($this->email_admin);   // Optional, an account where a human being reads.
		$phpMailer->to($data['email']);
		$phpMailer->subject("รายการ  Package SmartVoice Travel ที่ order  Package".$data['price'] ." บาท หมายเลข ".$data['order_id']);
		$phpMailer->message($body);

		if($phpMailer->Send()){

    		

		}else{

    		echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';
		}

	}

	

	protected function couterservice(){

		$data['mobile']    =  $this->session_data['mobile'];
		$data['firstname'] =  $this->session_data['firstname'];
		$data['lastname']  =  $this->session_data['lastname'];
		$data['email']     =  $this->session_data['email'];
		$data['country']   =  $this->session_data['country'];
		$data['package']   =  $this->session_data['package'];
		$data['date_start']   =  $this->session_data['date_start'];
		$data['date_end']     =  $this->session_data['date_end'];

		$data['package_total'] = $this->t2r_model->getPackage($data['package']);

		$this->session->set_userdata('payconfirm', 1 );

		

		$this->load->view('travel/element/head');
		$this->load->view('travel/counterservice_view',$data);

	}

	

	public function userpackage(){

		if($this->session->userdata('is_logged_in')){

		$data['date_range_start']  = null;
		$data['date_range_end']    = null;
		$data['mobile']    =  $this->session_data['mobile'];
		$data['firstname'] =  $this->session_data['firstname'];
		$data['lastname']  =  $this->session_data['lastname'];
		$data['email']     =  $this->session_data['email'];

		if($this->input->server('REQUEST_METHOD') === 'POST'){

			$data['filter'] = 1;
			$data['date_range_start']    =  strtotime($this->input->get_post('date_range_start' , TRUE));
			$data['date_range_end']      =  strtotime($this->input->get_post('date_range_end'   , TRUE));

			$data['call'] = $this->t2r_model->get_call_detail_by_filter($data['mobile'], $data['date_range_start'] , $data['date_range_end'] );

			


		}else{

			$start = strtotime(date("Y-m-d"));
            $start = date("Y-m-d", strtotime("-1 month", $start)); 
			$data['date_range_start']    =  strtotime($start);
			$data['date_range_end']      =  strtotime(date("Y-m-d"));
			$data['call'] = $this->t2r_model->get_call_detail_by_month($data['mobile']);

		}

			

		$this->load->view('travel/element/head');
		$this->load->view('travel/calldetail_view',$data);

		}else{

			redirect('customer/user');

		}

	

	}

	public function paymentconfirm(){

		if($this->uri->segment(4) != ""){


			$tran_id =  $this->uri->segment(4);
			$tran_id =  $this->decode($tran_id);
			$order = $this->t2r_model->get_order_data_orderid($tran_id);

			if(!empty($order)){

			
				$data = "";

				if($this->input->server('REQUEST_METHOD') === 'POST'){
					
					$this->form_validation->set_rules('mobile', 'เบอร์โทรศัพท์' , 'trim|xss_clean|required|numeric|min_length[10]|max_length[10]');
					$this->form_validation->set_rules('email' , 'อีเมล'  , 'trim|xss_clean|valid_email|required|min_length[5]|max_length[50]');
					$this->form_validation->set_rules('bank', 'ธนาคาร' , 'trim|xss_clean|required||max_length[130]');
					$this->form_validation->set_rules('hour', 'ชั่วโมง' , 'trim|xss_clean|required|max_length[30]');
					$this->form_validation->set_rules('minutes', 'นาที' , 'trim|xss_clean|required|max_length[15]');
					$this->form_validation->set_rules('money', 'จำนวนเงิน' , 'trim|xss_clean|required|max_length[15]');

					$this->form_validation->set_message('required', '%s ยังไม่ได้ระบุ');
					$this->form_validation->set_message('numeric', '%s ต้องเป็นตัวเลขเท่านั้น');
					$this->form_validation->set_message('max_length', '%s ต้องตัวเลขไม่มากกว่า %s ตัว');
					$this->form_validation->set_message('min_length', '%s ต้องมีตัวเลขไม่น้อยกว่า %s ตัว');			
					$this->form_validation->set_message('matches', '%s ต้องตรงกัน');

					if($this->form_validation->run() == FALSE){ 

			        	$data['message_error'] = validation_errors();

			    	}else{


			    		$data['mobile']    =  $this->input->get_post('mobile'   , TRUE);
			    		$name_sur = $this->t2r_model->get_firstname_lastname($data['mobile']);


			    		if(!empty($name_sur)){

			    			$data['email']     =  $this->input->get_post('email'   , TRUE);
							$data['firstname'] =  $name_sur['0']['first_name'];
							$data['lastname']  =  $name_sur['0']['last_name'];
							$data['bank']      =  $this->input->get_post('bank'   , TRUE);
							$data['date']      =  date('Y-m-d', strtotime($this->input->get_post('date'   , TRUE)));
							$data['hour']      =  $this->input->get_post('hour'   , TRUE);
							$data['minute']    =  $this->input->get_post('minutes' , TRUE);
							$data['money']     =  $this->input->get_post('money'  , TRUE);


							if(isset($_FILES['pay_confirm']['name'])  &&  !empty($_FILES['pay_confirm']['name'])){

								$this->sendpaymentconfirm_mail($data);
								$upload = $this->do_upload($data['mobile']);

								if(!empty($upload['success']) && $upload['success'] == 1){

									$this->t2r_model->insertPaymentConfirm($data['mobile'],$data['email'],$data['firstname'],$data['lastname'],$data['bank'],$data['date'],$data['hour'],$data['minute'],$data['money'] ,$upload['upload_data']['file_name'],$tran_id);
									$this->t2r_model->update_order_status($tran_id);

									$data['file_name'] = $upload['upload_data']['file_name'];
									$data['tran_id'] = $tran_id;
									
									$this->admin_sendpaymentconfirm_mail($data);
									$data['message_success'] = "เราได้รับการยืนยันเเล้ว | ระะบบได้ส่งเมลยืนยันไปที่ ".$data['email']." เรียบร้อยเเล้ว";

									
								}


							}else{

								$this->sendpaymentconfirm_mail($data);
								$this->t2r_model->insertPaymentConfirm($data['mobile'],$data['email'],$data['firstname'],$data['lastname'],$data['bank'],$data['date'],$data['hour'],$data['minute'],$data['money'] ,"" ,$tran_id);
								$this->t2r_model->update_order_status($tran_id);
								$data['tran_id'] = $tran_id;
								
								$this->admin_sendpaymentconfirm_mail($data);
								$data['message_success'] = "เราได้รับการยืนยันเเล้ว | ระะบบได้ส่งเมลยืนยันไปที่ ".$data['email']." เรียบร้อยเเล้ว";
								
							}

			    		}else{

			    			$data['message_error'] = "ไม่พบเบอร์โทรศัพท์นี้ในระบบ";
			    		}

					
			    	}

			    	

				}		

				$data['customer_order'] = $this->t2r_model->get_order_data($tran_id);	
				$data['bank_number']    = $this->t2r_model->get_bank_number();
				unset($_POST);
				//print_r($data['customer_order']);
				$this->load->view('travel/element/head');
				$this->load->view('travel/paymentconfirm_view' , $data );

			}
		}
	}

	protected function do_upload($mobile_number){

		$new_name = time().$mobile_number;
		$config =  array(

              'upload_path'     => realpath( APPPATH . '../assets/upload'),
              'allowed_types'   => "gif|jpg|png|jpeg|pdf",
              'overwrite'       => TRUE,
              'max_size'        => "2000KB",
              'max_height'      => "2000",
              'max_width'       => "2000",
			  'file_name'       => $new_name

        );

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('pay_confirm')){

			return $error = array('error' => $this->upload->display_errors());


		}else{

			return $data = array('upload_data' => $this->upload->data(),'success'=>1);


		}
	}

	protected function sendpaymentconfirm_mail($data){

		$data['admin'] = null;
		$this->load->library('email');
		$body =  $this->load->view('travel/payment_confirm_email_view',$data,true);

		$phpMailer = $this->email;
		$phpMailer->from($this->email_admin);
		$phpMailer->reply_to($this->email_admin);   // Optional, an account where a human being reads.
		$phpMailer->to($data['email']);
		$phpMailer->subject("เมลยืนยันการชำระเงิน เราได้รับข้อมูลจากคุณเเล้ว");
		$phpMailer->message($body);

		if($phpMailer->Send()){

    		

		}else{

    		echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';

		}


	}

	protected function admin_sendpaymentconfirm_mail($data){

		$data['admin'] = "yes";

		$this->load->library('email');
		$data['customer_order'] = $this->t2r_model->get_order_data($data['tran_id']);
		$data['tran_id'] = $this->encode($data['tran_id']);
		$body = $this->load->view('travel/payment_confirm_email_view',$data,true);

		$phpMailer = $this->email;
		$phpMailer->from($this->email_admin);
		$phpMailer->reply_to($this->email_admin);   // Optional, an account where a human being reads.
		$phpMailer->to($this->email_admin);
		$phpMailer->subject("หมายเลข order".$data['customer_order']['0']['order_id']." เมลยืนยันการชำระเงิน จากคุณ".$data['firstname']." ".$data['lastname']);
		$phpMailer->message($body);

		if($phpMailer->Send()){

    		

		}else{

    		echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';

		}
       
	}

	public function approve_order(){

		$tran_id =  $this->uri->segment(4);
		$token   =  $this->uri->segment(5);

		if(isset($tran_id ) && isset($token )){

			$tran_id = $this->decode($tran_id);
			$order_approve = $this->t2r_model->auth_order($tran_id , $token );

			if(!empty($order_approve)){

					if($order_approve['0']['status'] == 2 ){


							$approve_success = $this->update_order_api($order_approve['0']['mobile_number'],$order_approve['0']['package_id'],$order_approve['0']['tran_id'],$order_approve['0']['method_payment']);

							if($approve_success != "" && $approve_success['status'] == "Success"){

								$this->t2r_model->approve_status($order_approve['0']['tran_id']);
								$order_approve['0']['status']  = 3;

							}else{

								echo "approve order not success";
							}

					}

					if($order_approve['0']['status'] == 3 && $order_approve['0']['did_number'] == "" ){

						$did_number = $this->get_did_number($order_approve['0']['mobile_number'],$order_approve['0']['package_id'],$order_approve['0']['tran_id'],$order_approve['0']['method_payment']);

						if($did_number != "" && $did_number['status'] == 'Success'){
							$order_update = $this->t2r_model->approve_update($did_number['did'],$did_number['startdate'],$order_approve['0']['tran_id']);
							
							if($order_update == 1){

								$data['customer_order'] = $this->t2r_model->get_order_data($order_approve['0']['tran_id']);
								$send = $this->sendMailDid($data);

								if($send == 1){

									$data['message_success'] = "ทำการ appove order  ".$data['customer_order']['0']['order_id']." สำเร็จ";
									$this->load->view('travel/element/head');
									$this->load->view('travel/didconfirmsend_view',$data);

								}else{

									echo $send;
								}
								

							}
						}else{

							echo "get did-number not success";
						}

					}else{

						$data['customer_order'] = $this->t2r_model->get_order_data($order_approve['0']['tran_id']);
						$data['message_success'] = "ทำการ appove order  ".$data['customer_order']['0']['order_id']." สำเร็จ";
						$this->load->view('travel/element/head');
						$this->load->view('travel/didconfirmsend_view',$data);

					}
							

						
			}else{


				echo "order not corect";

			}
		
		}
		 
	}

	protected function check_already_update(){



	}

	protected function sendMailDid($data){

		$this->load->library('email');
		$body =  $this->load->view('travel/didconfirmsend_email_view',$data,true);

		$phpMailer = $this->email;
		$phpMailer->from($this->email_admin);
		$phpMailer->reply_to($this->email_admin);   // Optional, an account where a human being reads.
		$phpMailer->to($data['customer_order']['0']['email']);
		$phpMailer->cc($this->email_admin);
		$phpMailer->subject("เมลเเเจ้งว่า order ".$data['customer_order']['0']['order_id']."  ได้ทำรายการเสร็จสมบูรณ์" );
		$phpMailer->message($body);

		if($phpMailer->Send()){

    		return 1;

		}else{

    		return 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';

		}

	}

	

	

	public function t2rcheckout(){

		if($this->session->userdata('is_logged_in')){

			 $data['mobile']    =  $this->session_data['username'];
			 $data['firstname'] =  $this->session_data['firstname'];
			 $data['lastname']  =  $this->session_data['lastname'];
			 $data['money']     =  $this->session_data['money'];
			 $data['step'] = 3;

			 if($this->input->server('REQUEST_METHOD') === 'POST'){

			 	
			 	if($this->input->post('comfirm', TRUE) == '' || $this->input->post('comfirm', TRUE) == null){

			 		$package_standard = $this->input->post('package_standard', TRUE);
					$package_buffet1  = $this->input->post('package_buffet_199', TRUE);
					$package_buffet2  = $this->input->post('package_buffet_399', TRUE);
					$package_a2z      = $this->input->post('package_a2z', TRUE);
					
					if($this->input->post('topup', TRUE)){

						$data['topup'] = $this->input->post('topup', TRUE);
						$data['month_pay'] = $this->session->userdata('month_pay');
					}

					$this->session->set_userdata('package_standard', $package_standard);
					$this->session->set_userdata('package_buffet1', $package_buffet1);
					$this->session->set_userdata('package_buffet2', $package_buffet2 );
					$this->session->set_userdata('package_a2z', $package_a2z );

					$data['checkout'] = $this->t2r_model->getPackageCheckout($package_standard,$package_buffet1,$package_buffet2,$package_a2z);

					$this->load->view('t2rproject/element/head');
			 		$this->load->view('t2rproject/t2rcheckout_view' , $data);
			 	}
				
				if($this->input->post('comfirm', TRUE) == 'confirm_payment'){

					$package_standard =  $this->session->userdata('package_standard');
					$package_buffet1  =  $this->session->userdata('package_buffet1');
					$package_buffet2  =  $this->session->userdata('package_buffet2');
					$package_a2z      =  $this->session->userdata('package_a2z');
					$total_price      =  $this->session->userdata('total_price');
					$data['total_price'] = $total_price;

					$data['checkout'] = $this->t2r_model->getPackageCheckout($package_standard,$package_buffet1,$package_buffet2,$package_a2z);

					$this->session->unset_userdata('package_standard');
					$this->session->unset_userdata('package_buffet1');
					$this->session->unset_userdata('package_buffet2');
					$this->session->unset_userdata('package_a2z');
					$this->session->unset_userdata('total_price');

					$this->t2r_model->insertOrder( $data['mobile'] , $data['firstname'] , $data['lastname'] , $total_price , $data['checkout']);
			 		$this->load->view('t2rproject/element/head');
			 		$this->load->view('t2rproject/t2rsuccesspayment_view',$data);
			 	}


			 }else{
 				

					$package_standard      =  $this->session->userdata('package_standard');
					$package_buffet1       =  $this->session->userdata('package_buffet1');
					$package_buffet2       =  $this->session->userdata('package_buffet2');
					$package_a2z           =  $this->session->userdata('package_a2z');

					$data['checkout'] = $this->t2r_model->getPackageCheckout($package_standard,$package_buffet1,$package_buffet2,$package_a2z);	

				 	$this->load->view('t2rproject/element/head');
				 	$this->load->view('t2rproject/t2rcheckout_view' , $data );

			}

		 	 			

        }else{

	        	redirect('t2rproject/user');
        }

		
	}

	public function contact(){

		if($this->session->userdata('is_logged_in')){

			$data = null;

			if($this->input->server('REQUEST_METHOD') === 'POST'){

					$this->form_validation->set_rules('title', 'หัวข้อ' , 'trim|xss_clean|required|min_length[3]|max_length[500]');
					$this->form_validation->set_rules('message' , 'ข้่อความ'  , 'trim|xss_clean|required|min_length[3]|max_length[3000]');

					$this->form_validation->set_message('required', '%s ยังไม่ได้ระบุ');
					$this->form_validation->set_message('numeric', '%s ต้องเป็นตัวเลขเท่านั้น');
					$this->form_validation->set_message('max_length', '%s ต้องตัวเลขไม่มากกว่า %s ตัว');
					$this->form_validation->set_message('min_length', '%s ต้องมีตัวเลขไม่น้อยกว่า %s ตัว');			
					$this->form_validation->set_message('matches' , '%s ต้องตรงกัน');

					if($this->form_validation->run() == FALSE){ 

		        		$data['message_error'] = validation_errors();

		    		}else{


		    			$data['email']     =  $this->session_data['email'];
		    			$data['mobile']     =  $this->session_data['mobile'];
		    			$data['firstname'] =  $this->session_data['firstname'];
			 			$data['lastname']  =  $this->session_data['lastname'];

						$title = $this->input->post('title', TRUE);
						$message_text = $this->input->post('message', TRUE);

						$message =  "Name :".$data['firstname']."  ".$data['lastname']."<br>";
						$message .= "Mobile Number :".$data['mobile']."<br>";
						$message .= "Email :".$data['email']."<br><br><hr><br>";
						$message .= $message_text;

		    			$this->load->library('email');
						$body =  $this->load->view('travel/didconfirmsend_email_view',$data,true);

						$phpMailer = $this->email;
						$phpMailer->from($this->email_admin);
						$phpMailer->reply_to($this->email_admin);   // Optional, an account where a human being reads.
						$phpMailer->to($data['customer_order']['0']['email']);
						$phpMailer->cc($this->email_admin); 
						$phpMailer->subject($title." | จากคุณ ".$data['firstname']);
						$phpMailer->message($message);

						if($phpMailer->Send()){

				    		$data['message_success'] = "ท่านได้ส่ง mail สอบถามไปยังระบบเรียบร้อยเเล้ว";

						}else{

				    		echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';

						}
		    			

					}

			}

			$this->load->view('travel/element/head');
			$this->load->view('travel/contact_view',$data);

		}

	}


	public function t2rtopup(){

		if($this->session->userdata('is_logged_in')){

			$data['mobile']    =  $this->session_data['username'];
			$data['firstname'] =  $this->session_data['firstname'];
			$data['lastname']  =  $this->session_data['lastname'];
			$data['money']     =  $this->session_data['money'];

			if($this->input->server('REQUEST_METHOD') === 'POST'){

				$data['step'] = 2;
				$this->session->set_userdata('month_pay',  $this->input->post("month_pay"));
				$data['price_rate'] =  $this->price_model->get_price_rate();
				$data['current_package'] = $this->t2r_model->getOrderIdLast($data['mobile']);
				if(!empty($data['current_package'])){

					$data['current_package_detail'] = $this->t2r_model->getOrderDetail($data['current_package']['0']['order_id']);
				}
				$this->load->view('t2rproject/element/head');
				$this->load->view('t2rproject/t2rtopup_extend_view',$data);

			}else{

				$this->session->unset_userdata('month_pay');
				$data['step'] = 1;
				$data['current_package'] = $this->t2r_model->getOrderIdLast($data['mobile']);
				
				if(!empty($data['current_package'])){

					$data['current_package_detail'] = $this->t2r_model->getOrderDetail($data['current_package']['0']['order_id']);
					$data['price_package'] = $this->t2r_model->get_package(1);
				}

				$this->load->view('t2rproject/element/head');
				$this->load->view('t2rproject/t2rtopup_view',$data);
			}

		}

		
	}


	public function forgotpass(){

		$this->load->view('admin/forgot_password');	
	}

	public function get_auth(){

		$this->load->model('users_model');

	
		if($this->uri->segment(4) && $this->uri->segment(5)){

			$auth = $this->users_model->checkAuthData($this->uri->segment(4), $this->uri->segment(5));

			if( $auth->num_rows > 0){

				 $checkauth = $this->users_model->changeAuthData($this->uri->segment(5));
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
	/**
    * Destroy the session, and logout the user.
    * @return void
    */		
	public function logout(){	

		$this->session->sess_destroy();
		redirect('customer/user');
	}


}