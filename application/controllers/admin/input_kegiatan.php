<?php

class Input_kegiatan extends CI_Controller{
	public function index()
	{
		$data['kegiatan'] = $this->model_kegiatan->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/input_kegiatan');
		$this->load->view('templates_admin/footer');
	}
	public function tambah_aksi()
	{
		$nama_kgt		= $this->input->post('nama_kgt');
		$tempat			= $this->input->post('tempat');
		$alamat			= $this->input->post('alamat');
		$tanggal		= $this->input->post('tanggal');
		$waktu			= $this->input->post('waktu');

		$data = array(
			'nama_kgt'			=> $nama_kgt,
			'tempat'			=> $tempat,
			'alamat'			=>$alamat,
			'tanggal'			=>$tanggal,
			'waktu'				=>$waktu,
	
		);

		$this->model_kegiatan->tambah_jadwal($data, 'kegiatan');
		redirect('admin/input_kegiatan/index');
	}
}