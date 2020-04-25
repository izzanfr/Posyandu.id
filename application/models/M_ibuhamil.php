<?php 
class M_ibuhamil extends CI_Model {
		
	public function getIbuHamil($username) {
        $this->db->select('*');
        $this->db->from('profile_ibuhamil');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function profile_ibuhamil($username) {
        $this->db->select('id_registrasi');
        $this->db->select('nama');
        $this->db->select('username');
        $this->db->select('password');
        $this->db->select('alamat');
        $this->db->select('ttl');
        $this->db->select('kehamilan_ke');
        $this->db->select('no_telp');
        $this->db->from('profile_ibuhamil');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambah_ibuhamil($data, $data2)
	{
		$data= [
			"id_registrasi" => $this->input->post('id_registrasi'),
			"nama" => $this->input->post('nama'),
			"username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "alamat" => $this->input->post('alamat'),
            "ttl" => $this->input->post('ttl'),
            "kehamilan_ke" => $this->input->post('kehamilan_ke'),
            "no_telp" => $this->input->post('no_telp')
        ];
        $data2= [
            'id' => '',
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => 'ibu_hamil'
        ];
        $this->db->insert('user', $data2);
		return $this->db->insert('profile_ibuhamil', $data);
    }
    
    public function update_ibuhamil($username, $data)
	{
		$data = [
			"nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "ttl" => $this->input->post('ttl', true),
            "kehamilan_ke" => $this->input->post('kehamilan_ke', true),
            "no_telp" => $this->input->post('no_telp', true)
        ];
        $this->db->where('username', $username);
		return $this->db->update('profile_ibuhamil', $data);
    }

    public function hapus_ibuhamil($username)
    {
        $this->db->where('username', $username);
        return $this->db->delete('profile_ibuhamil');  
    }

    public function hapus_useribuhamil($username)
    {
        $this->db->where('username', $username);
        return $this->db->delete('user');
    }
    
}