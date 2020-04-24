<?php 
class M_profile_ih extends CI_Model {
		
	public function getProfile($username) {
		$this->db->where('username', $username);
        $query = $this->db->get('profile_ibuhamil');
        return $query->row_array();
    }

    public function editprofile($username, $data) {
		$data = [
			"nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "ttl" => $this->input->post('ttl'),
            "kehamilan_ke" => $this->input->post('kehamilan_ke'),
            "no_telp" => $this->input->post('no_telp'),
		];
		$this->db->where('username', $username);
        return $this->db->update('profile_ibuhamil', $data);
	}
}