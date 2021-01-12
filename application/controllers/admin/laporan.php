<?php

class Laporan extends CI_Controller{

	public function index()
	{
		$this->load->model('model_laporan');
		$data['j'] = $this->model_laporan->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan', $data);
		$this->load->view('templates_admin/footer');
	}
	public function search(){
		$this->load->model('model_laporan');
		$keyword = $this->input->post('keyword');
		$data['j']=$this->model_laporan->search_data($keyword);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan', $data);
		$this->load->view('templates_admin/footer');

	}
}