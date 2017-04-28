<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Smartvoice extends CI_Controller {

	public function index(){

		$this->load->model('site_model');
		$site['site'] = $this->site_model->getSiteInfo();

		$this->load->view('element/header',$site);
		$this->load->view('element/nav');
		$this->load->view('smartvoice_view');
		$this->load->view('element/footer',$site);
	}


}
