<?php

class Jumlah_pendaftar extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_daftar');
	}
	public function index()
	{
		$data['daftar_donor'] = $this->model_daftar->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jumlah_pendaftar', $data);
		$this->load->view('templates_admin/footer');
	}
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['daftar_donor']=$this->model_daftar->get_keyword($keyword);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jumlah_pendaftar', $data);
		$this->load->view('templates_admin/footer');

	}
}