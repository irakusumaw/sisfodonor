<?php

class Jumlah_darah_O extends CI_Controller{

	public function index()
	{
		$this->load->model('model_laporan');
		
		$data['s'] = $this->model_laporan->tampil_darahO()->result();
		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jumlah_darah_O', $data);
		$this->load->view('templates_admin/footer');
	}
	
}