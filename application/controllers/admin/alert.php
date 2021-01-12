<?php

class Alert extends CI_Controller{
	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/alert');
		$this->load->view('templates_admin/footer');
	}
}