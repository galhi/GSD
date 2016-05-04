<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function setview($main_view) {
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view($main_view);
		$this->load->view('footer');
		$this->load->view('Dashboard_req');
	}
	public function index()
	{
		
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}

		$this->setview('Dashboard_message');
	}
}
