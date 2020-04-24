<?php 
class M_catatanimunisasi extends CI_Model {
		
	public function getCatatanimunisasi($username) {
		$this->db->where('username', $username);
        $query = $this->db->get('catatan_imunisasi');
        return $query->result_array();
    }
}