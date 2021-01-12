<?php

class Jumlah_darah_B extends CI_Controller{

	public function index()
	{
		$this->load->model('model_laporan');
	//	$data['o'] = $this->model_laporan->tampil_darah()->result();
		
		$data['l'] = $this->model_laporan->tampil_darahB()->result();
		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jumlah_darah_B', $data);
		$this->load->view('templates_admin/footer');
	}
	
}