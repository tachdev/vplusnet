<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index(){

		$this->load->model('site_model');
		$site['site'] = $this->site_model->getSiteInfo();
		$data['site'] = $site['site'];

		if ($this->input->server('REQUEST_METHOD') === 'POST'){

			$return = $this->sendMail($site['site']['0']['email']);
			$site['scroll'] = 1;

			if($return == 1){

				$data['message_success'] =1;

			}elseif($return == 2){

				$data['message_error'] = 'ส่งข้อความไม่สำเร็จ';	

			}elseif($return == 0){

				$data['message_error'] = $return;
			}
		}

		$this->load->view('element/header',$site);
		$this->load->view('element/nav');
		$this->load->view('contact_view',$data);
		$this->load->view('element/footer',$site);
	}

	private function sendMail($email){

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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */