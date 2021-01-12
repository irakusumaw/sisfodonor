<?php

class Jumlah_pendonortolak extends CI_Controller{

	public function index()
	{
		$this->load->model('model_laporan');
		$data['pt'] = $this->model_laporan->jumlah_pendonortolak()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jumlah_pendonortolak', $data);
		$this->load->view('templates_admin/footer');
	}
	public function search(){
		$this->load->model('model_laporan');
		$keyword = $this->input->post('keyword');
		$data['pt']=$this->model_laporan->search_pendonortolak($keyword);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jumlah_pendonortolak', $data);
		$this->load->view('templates_admin/footer');

	}
}