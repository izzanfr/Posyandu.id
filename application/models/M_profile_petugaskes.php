<?php 
class M_profile_petugaskes extends CI_Model {
		
	public function getProfile($username) {
		$this->db->where('username', $username);
        $query = $this->db->get('profile_pkesehatan');
        return $query->row_array();
    }

    public function editprofile($username, $data) {
		$data = [
			"nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "no_telp" => $this->input->post('no_telp'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin')
		];
		$this->db->where('username', $username);
        return $this->db->update('profile_pkesehatan', $data);
	}
}