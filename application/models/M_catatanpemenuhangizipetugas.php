<?php 
class M_catatanpemenuhangizipetugas extends CI_Model {
		
	public function getCatatanimunisasi($username) {
        $this->db->select('*');
        $this->db->from('catatan_pemenuhangizi');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getCatatanpemenuhangizi($username) {
        $this->db->select('tanggal');
        $this->db->select('nama_petugas');
        $this->db->select('umur');
        $this->db->select('vitamin');
        $this->db->select('nasihat');
        $this->db->from('catatan_pemenuhangizi');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result_array();
    }
}