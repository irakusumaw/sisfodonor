<?php

class Model_petugas extends CI_Model{
	public function tampil_data(){
		return $this->db->get('petugas');
	}

	public function kode(){
		  $this->db->select('RIGHT(petugas.no,1) as no', FALSE);
		  $this->db->order_by('no','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('petugas');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $no = intval($data->no) + 1; 
		  }
		  else{      
			   $no = 1;  //cek jika kode belum terdapat pada table
		  } 
			  $batas = str_pad($no, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "PTG".$batas;  //format kode
			  return $kodetampil;  
	}

	public function tambah_petugas($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_petugas($where,$table){
		return $this->db->get_where($table,$where); 
	}

	public function update_petugas($data,$no)
	{
		$this->db->where('no', $no);
		$this->db->update('petugas', $data);
	}

	public function hapus_petugas($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->like('nama',$keyword);
		return $this->db->get()->result();
	}

	public function get_keywordtg($keywordtg){
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->like('tugas',$keywordtg);
		return $this->db->get()->result();
	}
}
?>