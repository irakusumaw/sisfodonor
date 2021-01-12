<?php

class Data_kegiatan extends CI_Controller{
	public function index()
	{
		$data['kegiatan'] = $this->model_kegiatan->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_kegiatan', $data);
		$this->load->view('templates_admin/footer');
	}
	

	public function edit($no)
	{
		$where = array('no' =>$no);
		$data['kegiatan'] = $this->model_kegiatan->edit_kegiatan($where, 'kegiatan')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_kegiatan',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$no				= $this->input->post('no');
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

		

		$this->model_kegiatan->update_kegiatan($data, $no,'kegiatan');
		redirect('admin/data_kegiatan/index');
	}
	public function hapus ($no)
	{
		$where = array('no' => $no);
		$this->model_kegiatan->hapus_kegiatan($where, 'kegiatan');
		redirect('admin/data_kegiatan/index');
	}
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['kegiatan']=$this->model_kegiatan->get_keyword($keyword);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_kegiatan', $data);
		$this->load->view('templates_admin/footer');

	}
	public function searchtgl(){
		$keywordtgl = $this->input->post('keywordtgl');
		$data['kegiatan']=$this->model_kegiatan->get_keywordtgl($keywordtgl);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_kegiatan', $data);
		$this->load->view('templates_admin/footer');

	}
}