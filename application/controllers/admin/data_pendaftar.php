<?php

class Data_pendaftar extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_daftar');
	}
	public function index()
	{
		$data['daftar_donor'] = $this->model_daftar->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_pendaftar', $data);
		$this->load->view('templates_admin/footer');
	}
	public function edit($no_daftar)
	{
		$where = array('no_daftar' =>$no_daftar);
		$data['daftar_donor'] = $this->model_daftar->edit_daftar($where, 'daftar_donor')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_pendaftar', $data);
		$this->load->view('templates_admin/footer');
	}
	public function update(){
		$no_daftar		    = $this->input->post('no_daftar');
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
		
		$this->model_daftar->update_daftar($data, $no_daftar, 'daftar_donor');
		redirect('admin/data_pendaftar/index');
		
	}
	public function hapus ($no_daftar)
	{
		$where = array('no_daftar' => $no_daftar);
		$this->model_kegiatan->hapus_kegiatan($where, 'daftar_donor');
		redirect('admin/data_pendaftar/index');
	}
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['daftar_donor']=$this->model_daftar->get_keyword($keyword);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_pendaftar', $data);
		$this->load->view('templates_admin/footer');

	}
	public function detail($no_daftar){

		$id = $this->uri->segment(4);
	
		$data['detailp'] = $this->model_daftar->detail_data($id)->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detailp',$data);
		$this->load->view('templates_admin/footer');
	}
}