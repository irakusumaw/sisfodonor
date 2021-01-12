<?php

class Input_pendonor extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('model_daftar');
	}

public function index()
	{
		$keyword = $this->input->post('keyword');
		$data['daftar_donor']=$this->model_daftar->get_keyword($keyword);
		$data['kegiatan']=$this->db->get('kegiatan')->result_array();
		$data['petugas']=$this->db->get('petugas')->result_array();
		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/input_pendonor',$data);
		$this->load->view('templates_admin/footer');
	}

public function cari(){
        $no_daftar=$_GET['no_daftar'];
        $cari =$this->model_daftar->cari($no_daftar)->result();
        echo json_encode($cari);
    } 

public function get_no_pendaftar()
{
	$no_daftar = $this->input->post('no_pendaftar');
	$hasil 	   = $this->model_pendonor->get_no_pendaftar($no_daftar);
	echo json_encode($hasil);
}

public function tambah_aksi()
	{

	$g = $this->db->query("SELECT nama_kgt FROM daftar_donor where no_daftar='$no_daftar' ");
	$nama_kgt = $row["nama_kgt"];

	$nama_kgt	= $this->input->post('nama_kgt');
	$no_pendaftar = $this->input->post('no_pendaftar');
	
	$sql = $this->db->query("SELECT nama_kgt, no_pendaftar FROM pendonor where nama_kgt='$nama_kgt' and no_pendaftar='$no_pendaftar' ");
	$cek_nik = $sql->num_rows();
	if ($cek_nik > 0) {
	$this->session->set_flashdata('message', 'Nomor KTP Sudah digunakan sebelumnya');
	redirect('admin/alert/index');
	} else {
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

		$this->model_pendonor->tambah_pendonor($data, 'pendonor');
          redirect('admin/input_pendonor/index');
	} 
	}
}