<?php

class data_pendonor extends CI_Controller{
	public function index()
	{
		$data['pendonor'] = $this->model_pendonor->tampil_data()->result(); 
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_pendonor',$data);
		$this->load->view('templates_admin/footer');
	}

	public function edit($no)
	{
		$where = array('no' =>$no);
		$data['pendonor'] = $this->model_pendonor->edit_pendonor($where, 'pendonor')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_pendonor',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){

		$no		= $this->input->post('no');
		$tanggal		= $this->input->post('tanggal');

		$nama_kgt	= $this->input->post('nama_kgt');
		$nama_petugas	= $this->input->post('nama_petugas');
		$no_pendaftar		= $this->input->post('no_pendaftar');
		$hb				= $this->input->post('hb');
		$bb				= $this->input->post('bb');
		$tekanan_darah	= $this->input->post('tekanan_darah');
		$golongan_darah	= $this->input->post('golongan_darah');
		$status	= $this->input->post('status');
		$keterangan	= $this->input->post('keterangan');

		$data = array(

			'nama_kgt'		=> $nama_kgt,
			'nama_petugas'		=> $nama_petugas,
			'tanggal'			=> $tanggal,
			'no_pendaftar'			=> $no_pendaftar,
			'hb'				=> $hb,
			'bb'		=>$bb,
			'tekanan_darah'		=>$tekanan_darah,
			'golongan_darah'	=>$golongan_darah,
			'status'	=>$status,
			'keterangan'	=>$keterangan,
			
		);


		

		$this->model_pendonor->update_pendonor($data, $no,'pendonor');
		redirect('admin/data_pendonor/index');
	}
	public function hapus ($no)
	{
		$where = array('no' => $no);
		$this->model_pendonor->hapus_pendonor($where, 'pendonor');
		redirect('admin/data_pendonor/index');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['pendonor']=$this->model_pendonor->get_keyword($keyword);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_pendonor', $data);
		$this->load->view('templates_admin/footer');

	}
	public function detail($no){

		$id = $this->uri->segment(4);
	
		$data['detail'] = $this->model_pendonor->detail_data($id)->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail',$data);
		$this->load->view('templates_admin/footer');
	}

}