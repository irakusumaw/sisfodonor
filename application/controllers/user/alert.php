<?php

class Alert extends CI_Controller{
	public function index()
	{
		$this->load->view('templates_user/headeru');
		$this->load->view('templates_user/sidebaru');
		$this->load->view('user/alert');
		$this->load->view('templates_user/footeru');
	}
	
}