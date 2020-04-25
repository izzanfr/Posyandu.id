<?php 
class M_profile_petugaskes extends CI_Model {
		
	public function getProfile($username) {
		$this->db->where('username', $username);
        $query = $this->db->get('profile_pkesehatan');
        return $query->row_array();
    }
}