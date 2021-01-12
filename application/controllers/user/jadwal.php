<?php

class Jadwal extends CI_Controller{
	public function index()
	{
		$data['kegiatan'] = $this->model_kegiatan->tampil_data()->result();
		$this->load->view('templates_user/headeru');
		$this->load->view('templates_user/sidebaru');
		$this->load->view('user/jadwal', $data);
		$this->load->view('templates_user/footeru');
	}
	public function tambah_aksi()
	{
		$nama		= $this->input->post('nama');
		$usia			= $this->input->post('usia');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$alamat			= $this->input->post('alamat');
		$golongan_darah	= $this->input->post('golongan_darah');
		

		$data = array(
			'nama'			    => $nama,
			'usia'				=> $usia,
			'jenis_kelamin'		=>$jenis_kelamin,
			'alamat'			=>$alamat,
			'golongan_darah'	=>$golongan_darah,
			
		);

		$this->model_jadwal->tambah_daftar($data, 'daftar_donor');
		redirect('user/jadwal/index');
	} 
}
?>