<?php

class Dashboard extends CI_Controller{
	public function index()
	{
		$this->load->view('templates_pmi/header');
		$this->load->view('templates_pmi/sidebar');
		$this->load->view('pmi/dashboard');
		$this->load->view('templates_pmi/footer');
	}
}