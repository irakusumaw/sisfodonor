<?php

class Data_daftar extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_daftar');
	}
	public function index()
	{
		$data['daftar_donor'] = $this->model_daftar->data_daftar();
		$this->load->view('templates_user/headeru');
		$this->load->view('templates_user/sidebaru');
		$this->load->view('user/data_daftar', $data);
		$this->load->view('templates_user/footeru');
	}
}