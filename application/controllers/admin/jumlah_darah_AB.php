<?php

class Jumlah_darah_AB extends CI_Controller{

	public function index()
	{
		$this->load->model('model_laporan');
		$data['n'] = $this->model_laporan->tampil_darahAB()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jumlah_darah_AB', $data);
		$this->load->view('templates_admin/footer');
	}
	
}