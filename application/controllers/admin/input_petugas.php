<?php

class Input_petugas extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_petugas');
	}

	public function index()
	{
		$data['no'] = $this->model_petugas->kode();
		$data['petugas'] = $this->model_petugas->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/input_petugas', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_aksi()
	{
		$no		= $this->input->post('no');
		$nama		= $this->input->post('nama');
		$tempatlahir			= $this->input->post('tempatlahir');
		$tanggallahir			= $this->input->post('tanggallahir');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$alamat			= $this->input->post('alamat');
		$tugas		= $this->input->post('tugas');


		$data = array(
			'no'			=> $no,
			'nama'			=> $nama,
			'tempatlahir'			=> $tempatlahir,
			'tanggallahir'			=> $tanggallahir,
			'jenis_kelamin'			=>$jenis_kelamin,
			'alamat'			=>$alamat,
			'tugas'				=>$tugas,
	
		);

		$this->model_petugas->tambah_petugas($data, 'petugas');
		redirect('admin/input_petugas/index');
	}
}