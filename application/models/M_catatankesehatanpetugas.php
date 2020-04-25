<?php 
class M_catatankesehatanpetugas extends CI_Model {
		
	public function getCatatanimunisasi($username) {
        $this->db->select('*');
        $this->db->from('catatan_kesehatan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getCatatankesehatanpetugas($username) {
        $this->db->select('tanggal_pemeriksaan');
        $this->db->select('nama_petugas');
        $this->db->select('keluhan');
        $this->db->select('berat');
        $this->db->select('umur');
        $this->db->select('tinggi');
        $this->db->select('letak');
        $this->db->select('denyut');
        $this->db->select('kaki');
        $this->db->select('hasil');
        $this->db->select('nasihat');
        $this->db->select('kapan');
        $this->db->from('catatan_kesehatan');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result_array();
    }
}