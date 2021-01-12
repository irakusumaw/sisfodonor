<?php

class Daftar_donor extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_daftar');
	}
	public function index()
	{
		$data['no_daftar'] = $this->model_daftar->kode();
		$data['kegiatan']=$this->db->get('kegiatan')->result_array();
		$this->load->view('templates_user/headeru');
		$this->load->view('templates_user/sidebaru');
		$this->load->view('user/daftar_donor', $data);
		$this->load->view('templates_user/footeru');
	}

	public function tambah_aksi()
	{
	$nama_kgt	= $this->input->post('nama_kgt');
	$no_ktp = $this->input->post('no_ktp');
	$sql = $this->db->query("SELECT no_ktp, nama_kgt FROM daftar_donor where no_ktp='$no_ktp'");
	$cek_nik = $sql->num_rows();
	if ($cek_nik > 0) {
	$this->session->set_flashdata('message', 'Nomor KTP Sudah digunakan sebelumnya');
	redirect('user/alert/index');
		}else{
		$no_daftar		    = $this->input->post('no_daftar');
		$nama_kgt		= $this->input->post('nama_kgt');
		$nama		    = $this->input->post('nama');
		$no_ktp		    = $this->input->post('no_ktp');
		$tempatlahir			= $this->input->post('tempatlahir');
		$tanggallahir			= $this->input->post('tanggallahir');
		$usia			= $this->input->post('usia');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$alamat			= $this->input->post('alamat');
		$no_telp		= $this->input->post('no_telp');
		$donor_terakhir	= $this->input->post('donor_terakhir');
		

		$data = array(
			'no_daftar'			    => $no_daftar,
			'nama_kgt'			    => $nama_kgt,
			'nama'			    => $nama,
			'no_ktp'			=> $no_ktp,
			'tempatlahir'			    => $tempatlahir,
			'tanggallahir'			=> $tanggallahir,
			'usia'				=> $usia,
			'jenis_kelamin'		=> $jenis_kelamin,
			'alamat'			=> $alamat,
			'no_telp'			=> $no_telp,
			'donor_terakhir'	=> $donor_terakhir,
			
		);

		$this->model_daftar->tambah_daftardo($data,'daftar_donor');
		redirect('user/data_daftar/index');
	}
	} 
}