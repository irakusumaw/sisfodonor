<?php

class Model_daftar extends CI_Model{
	public function tampil_data(){
		return $this->db->get('daftar_donor');
	}
	
	public function kode(){
		  $this->db->select('RIGHT(daftar_donor.no_daftar,1) as no_daftar', FALSE);
		  $this->db->order_by('no_daftar','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('daftar_donor');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $no_daftar = intval($data->no_daftar) + 1; 
			   
		  }
		  else{      
			   $no_daftar = 1;  //cek jika kode belum terdapat pada table
		  }
			  $tgl=date('dmY'); 
			  $batas = str_pad($no_daftar, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "PD".$tgl.$batas;  //format kode
			  return $kodetampil;  
	}

	public function kegiatan(){
		$hsll=$this->db->query("SELECT nama_kgt as nama_kgt from kegiatan order by no DESC limit 1");
		
		return $hsll;
	}
	public function cek_ktp($no_ktp)
	{
		$this->db->where('no_ktp', $no_ktp);
		return $this->db->get('daftar_donor');
	}

	public function tambah_daftardo($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_daftar($where,$table){
		return $this->db->get_where($table,$where); 
	}

	public function update_daftar($data,$no_daftar)
	{
		$this->db->where('no_daftar', $no_daftar);
		$this->db->update('daftar_donor', $data);
	}
	public function hapus_daftar($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('daftar_donor');
		$this->db->like('no_daftar',$keyword);
		$this->db->or_like('no_ktp',$keyword);
		return $this->db->get()->result();
	}
	public function data_daftar(){
	$this->db->select('*');
	$this->db->from('daftar_donor');
	$this->db->order_by('daftar_donor.no_daftar', "DESC");
	$this->db->limit(1);
	return $this->db->get()->result();
	}
	public function detail_data($id){
		
		$hsl=$this->db->query("SELECT no_daftar,nama,no_ktp,usia,jenis_kelamin,alamat,no_telp,donor_terakhir from daftar_donor WHERE no_daftar='$id'");
		return $hsl;
	}
}
?>
