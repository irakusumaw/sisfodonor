<?php

class Jumlah_darah_A extends CI_Controller{

	public function index()
	{
		$this->load->model('model_laporan');
		$data['k'] = $this->model_laporan->tampil_darahA()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jumlah_darah_A', $data);
		$this->load->view('templates_admin/footer');
	}
	
	
}