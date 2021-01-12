<?php

class Data_petugas extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_petugas');
	}
	public function index()
	{
		$data['petugas'] = $this->model_petugas->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_petugas', $data);
		$this->load->view('templates_admin/footer');
	}
	
	public function edit($no)
	{
		$where = array('no' =>$no);
		$data['petugas'] = $this->model_petugas->edit_petugas($where, 'petugas')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_petugas',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$no				= $this->input->post('no');
		$nama		= $this->input->post('nama');
		$tempatlahir			= $this->input->post('tempatlahir');
		$tanggallahir			= $this->input->post('tanggallahir');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$alamat			= $this->input->post('alamat');
		$tugas		= $this->input->post('tugas');

		$data = array(
			'nama'			=> $nama,
			'tempatlahir'			=> $tempatlahir,
			'tanggallahir'			=> $tanggallahir,
			'jenis_kelamin'			=>$jenis_kelamin,
			'alamat'			=>$alamat,
			'tugas'				=>$tugas,
	
		);

		

		$this->model_petugas->update_petugas($data, $no, 'petugas');
		redirect('admin/data_petugas/index');
	}

	public function hapus ($no)
	{
		$where = array('no' => $no);
		$this->model_petugas->hapus_petugas($where, 'petugas');
		redirect('admin/data_petugas/index');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['petugas']=$this->model_petugas->get_keyword($keyword);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_petugas', $data);
		$this->load->view('templates_admin/footer');

	}
	public function searchtg(){
		$keywordtg = $this->input->post('keywordtg');
		$data['petugas']=$this->model_petugas->get_keywordtgl($keywordtg);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_petugas', $data);
		$this->load->view('templates_admin/footer');

	}
}