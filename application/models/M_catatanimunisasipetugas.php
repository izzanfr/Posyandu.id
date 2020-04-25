<?php 
class M_catatanimunisasipetugas extends CI_Model {
		
	public function getCatatanimunisasi($username) {
        $this->db->select('*');
        $this->db->from('catatan_imunisasi');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function profile_petugaskesehatan($username) {
        $this->db->select('nama_petugas');
        $this->db->select('umur');
        $this->db->select('tanggal');
        $this->db->select('vaksin');
        $this->db->from('catatan_imunisasi');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result_array();
    }
}