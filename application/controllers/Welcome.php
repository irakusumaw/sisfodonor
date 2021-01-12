<?php

class Welcome extends CI_Controller{
	public function index()
	{
		$this->load->view('templates_user/headeru');
		$this->load->view('templates_user/sidebaru');
		$this->load->view('welcome_message');
		$this->load->view('templates_user/footeru');
	}
}