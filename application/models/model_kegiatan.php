<?php

class Model_kegiatan extends CI_Model{
	public function tampil_data(){
		return $this->db->get('kegiatan');
	}
	public function kegiatan(){
		$hsll=$this->db->query("SELECT nama_kgt from kegiatan order by no DESC limit 1");
		return $hsll;
	}

	public function tambah_jadwal($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_kegiatan($where,$table){
		return $this->db->get_where($table,$where); 
	}

	public function update_kegiatan($data,$no)
	{
		$this->db->where('no', $no);
		$this->db->update('kegiatan',$data);
	}

	public function hapus_kegiatan($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->like('nama_kgt',$keyword);
		return $this->db->get()->result();
	}

	public function get_keywordtgl($keywordtgl){
		$this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->like('tanggal',$keywordtgl);
		return $this->db->get()->result();
	}
}
?>