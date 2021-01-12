<?php

class Alertu extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_daftar');
	}
	public function index()
	{
		$keyword = $this->input->post('keyword');
		$data['dd']=$this->model_daftar->get_keyword($keyword);
		$this->load->view('templates_user/headeru');
		$this->load->view('templates_user/sidebaru');
		$this->load->view('user/alertu', $data);
		$this->load->view('templates_user/footeru');

	}
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['dd']=$this->model_daftar->get_keyword($keyword);
		$this->load->view('templates_user/headeru');
		$this->load->view('templates_user/sidebaru');
		$this->load->view('user/alert', $data);
		$this->load->view('templates_user/footeru');

	}
}