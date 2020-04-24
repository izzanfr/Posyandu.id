<?php 
class M_catatanpemenuhangizi extends CI_Model {
		
	public function getCatatanPemenuhangizi($username) {
		$this->db->where('username', $username);
        $query = $this->db->get('catatan_pemenuhangizi');
        return $query->result_array();
    }
}