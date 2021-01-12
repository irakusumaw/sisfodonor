<?php

class Jumlah_pendonor extends CI_Controller{

	public function index()
	{
		$this->load->model('model_laporan');
		$data['p'] = $this->model_laporan->jumlah_pendonor()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jumlah_pendonor', $data);
		$this->load->view('templates_admin/footer');
	}
	public function search(){
		$this->load->model('model_laporan');
		$keyword = $this->input->post('keyword');
		$data['p']=$this->model_laporan->search_pendonor($keyword);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jumlah_pendonor', $data);
		$this->load->view('templates_admin/footer');

	}
}