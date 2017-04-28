<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion extends CI_Controller {

	public function index()
	{

		$this->load->model('site_model');
		$this->load->model('price_model');
		$site['site'] = $this->site_model->getSiteInfo();
		$data['price_rate'] = $this->price_model->get_price_rate();

		$this->load->view('element/header',$site);
		$this->load->view('element/nav');
		$this->load->view('promotion_view',$data);
		$this->load->view('element/footer',$site);
	}
}