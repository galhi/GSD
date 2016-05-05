<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function setview($main_view) {
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view($main_view.'_main');
		$this->load->view('footer');
		$this->load->view($main_view.'_req');
	}
	public function index()
	{
		$this->setview('Dashboard');
	}
}
