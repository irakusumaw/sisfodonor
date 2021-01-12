<?php

class Model_laporan extends CI_Model{
	public function tampil_data(){
		
		$hsl=$this->db->query("SELECT no_daftar,nama, pendonor.nama_kgt, pendonor.nama_petugas, pendonor.tanggal, pendonor.hb, pendonor.bb, pendonor.tekanan_darah, pendonor.golongan_darah FROM pendonor INNER JOIN daftar_donor WHERE pendonor.no_pendaftar = daftar_donor.no_daftar and status='diterima' ");
		return $hsl;
	}
//	public function tampil_darah(){
		
//		$hslall=$this->db->query("SELECT tanggal, nama_kgt from pendonor WHERE status='diterima' group by tanggal ");
//		return $hslall;
//	}
    public function tampil_darahA(){
		
		$hslA=$this->db->query("SELECT tanggal, nama_kgt, count(golongan_darah)as A from pendonor where golongan_darah='A' and status='diterima' group by nama_kgt");
		return $hslA;
	}
	public function tampil_darahB(){
		
		$hslB=$this->db->query("SELECT tanggal, nama_kgt, count(golongan_darah)as B from pendonor where golongan_darah='B' and status='diterima' group by tanggal");
		return $hslB;
	}
	public function tampil_darahO(){
		
		$hslO=$this->db->query("SELECT tanggal, nama_kgt, count(golongan_darah)as O from pendonor where golongan_darah='O' and status='diterima' group by nama_kgt ");
		return $hslO;
	}
	public function tampil_darahAB(){
		
		$hslAB=$this->db->query("SELECT tanggal, nama_kgt, count(golongan_darah)as AB from pendonor where golongan_darah='AB' and status='diterima' group by nama_kgt");
		return $hslAB;
	}
	public function jumlah_pendonor(){
		$hslpdr=$this->db->query("SELECT no, tanggal, nama_kgt, daftar_donor.nama, daftar_donor.jenis_kelamin, daftar_donor.usia, golongan_darah FROM daftar_donor INNER JOIN pendonor WHERE daftar_donor.no_daftar = pendonor.no_pendaftar and pendonor.status = 'diterima'  ");
		return $hslpdr;
	}
	public function jumlah_pendonortolak(){
		$hslpdr=$this->db->query("SELECT no, tanggal, nama_kgt, daftar_donor.nama, daftar_donor.jenis_kelamin, daftar_donor.usia, golongan_darah, keterangan FROM daftar_donor INNER JOIN pendonor WHERE daftar_donor.no_daftar = pendonor.no_pendaftar and pendonor.status = 'ditolak'  ");
		return $hslpdr;
	}
	public function search_pendonor($keyword){
		$this->db->select('*');
		$this->db->from('pendonor');
		$this->db->join('daftar_donor','daftar_donor.no_daftar=pendonor.no_pendaftar');
		$this->db->where('pendonor.nama_kgt',$keyword);
		$this->db->where('pendonor.status', 'diterima');
		return $this->db->get()->result();
	}
	public function search_pendonortolak($keyword){
		$this->db->select('*');
		$this->db->from('pendonor');
		$this->db->join('daftar_donor','daftar_donor.no_daftar=pendonor.no_pendaftar');
		$this->db->where('pendonor.nama_kgt',$keyword);
		$this->db->where('pendonor.status', 'ditolak');
		return $this->db->get()->result();
	}
	public function search_data($keyword){
		$this->db->select('*');
		$this->db->from('pendonor');
		$this->db->join('daftar_donor','daftar_donor.no_daftar=pendonor.no_pendaftar');
		$this->db->where('pendonor.nama_kgt',$keyword);
		$this->db->where('pendonor.status', 'diterima');
		return $this->db->get()->result();
	}
}
?>