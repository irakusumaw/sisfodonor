<?php

class Dashboard extends CI_Controller{
	public function index()
	{
		$this->load->view('templates_user/headeru');
		$this->load->view('templates_user/sidebaru');
		$this->load->view('user/dashboard');
		$this->load->view('templates_user/footeru');
	}
}