<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {
	public function setview($main_view) {
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view($main_view.'_main');
		$this->load->view('footer');
		$this->load->view($main_view.'_req');
	}
	public function index()
	{
		$this->setview('Contacts');
	}

	

	public function send_invite($value='')
	{
		//catch invite
		if ($this->input->post()) {
			$posts = $this->input->post();
			foreach ($posts as $key => $value) {
				$$key = $value;
			}
		} else {
			redirect('/', 'refresh');
		}
		

		//send email
		//email send pop up
		//add a user with dummy data
		//add to contacts_rel with the dummy id and set user id
		//status as pending
		//timesramp as send date

	}

	public function FunctionName($value='')
	{
		# code...
	}
	


}
