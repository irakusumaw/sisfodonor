<?php

class Model_jadwal extends CI_Model{
	public function tampil_data(){
		return $this->db->get('kegiatan');
	}

	public function tambah_daftar($data,$table){
		$this->db->insert($table,$data);
	}
}
?>