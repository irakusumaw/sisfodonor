<?php

class Jumlah_darah extends CI_Controller{

	public function index()
	{
		$this->load->model('model_laporan');
//		$data['a'] = $this->model_laporan->tampil_darah()->result();
		$data['k'] = $this->model_laporan->tampil_darahA()->result();
		$data['l'] = $this->model_laporan->tampil_darahB()->result();
		$data['s'] = $this->model_laporan->tampil_darahO()->result();
		$data['n'] = $this->model_laporan->tampil_darahAB()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jumlah_darah', $data);
		$this->load->view('templates_admin/footer');
	}
	
}