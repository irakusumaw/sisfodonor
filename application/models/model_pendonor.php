<?php

class Model_pendonor extends CI_Model{
	public function tampil_data(){
		return $this->db->get('pendonor');
	}

	public function tambah_pendonor($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_pendonor($where,$table){
		return $this->db->get_where($table,$where); 
	}

	public function update_pendonor($data,$no)
	{
		$this->db->where('no',$no);
		$this->db->update('pendonor', $data);
	}

	public function hapus_pendonor($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_no_pendaftar($no_daftar)
	{
		$data = $this->db->query("SELECT nama_kgt FROM daftar_donor WHERE no_daftar='$no_daftar'");
		if($data->num_rows() >= 0)
		{
			foreach ($data->result_array() as $hsl) 
			{
				$hasil = array(
					'nama_kgt' => $hsl['nama_kgt'], 
				);
			}
		}
		return $hasil;
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('pendonor');
		$this->db->or_like('nama_kgt',$keyword);
		return $this->db->get()->result();
	}

	public function detail_data($id){
		
		$hsl=$this->db->query("SELECT no_daftar,nama,no_ktp,usia,jenis_kelamin,alamat,no_telp,donor_terakhir, pendonor.nama_petugas, pendonor.tanggal, pendonor.hb, pendonor.bb, pendonor.tekanan_darah, pendonor.golongan_darah, pendonor.status, pendonor.keterangan FROM pendonor INNER JOIN daftar_donor WHERE pendonor.no_pendaftar = daftar_donor.no_daftar AND no_pendaftar='$id'");
		return $hsl;
	}
}
?>