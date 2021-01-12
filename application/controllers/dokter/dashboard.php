<?php

class Dashboard extends CI_Controller{
	public function index()
	{
		$this->load->view('templates_dokter/header');
		$this->load->view('templates_dokter/sidebar');
		$this->load->view('dokter/dashboard');
		$this->load->view('templates_dokter/footer');
	}
}