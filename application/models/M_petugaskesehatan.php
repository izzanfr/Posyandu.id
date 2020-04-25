<?php 
class M_petugaskesehatan extends CI_Model {
		
	public function getPKesehatan($username) {
        $this->db->select('*');
        $this->db->from('profile_pkesehatan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function profile_petugaskesehatan($username) {
        $this->db->select('nip');
        $this->db->select('nama');
        $this->db->select('username');
        $this->db->select('password');
        $this->db->select('alamat');
        $this->db->select('jenis_kelamin');
        $this->db->select('no_telp');
        $this->db->from('profile_pkesehatan');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambah_pkesehatan($data, $data2)
	{
		$data= [
			"nip" => $this->input->post('nip'),
			"nama" => $this->input->post('nama'),
			"username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "alamat" => $this->input->post('alamat'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "no_telp" => $this->input->post('no_telp')
        ];
        $data2= [
            'id' => '',
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => 'petugas_kesehatan'
        ];
        $this->db->insert('user', $data2);
		return $this->db->insert('profile_pkesehatan', $data);
    }
    
    public function update_pkesehatan($username, $data)
	{
		$data = [
			"nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "no_telp" => $this->input->post('no_telp', true)
        ];
        $this->db->where('username', $username);
		return $this->db->update('profile_pkesehatan', $data);
    }

    public function hapus_petugaskesehatan($username)
    {
        $this->db->where('username', $username);
        return $this->db->delete('profile_pkesehatan');  
    }

    public function hapus_userpetugaskesehatan($username)
    {
        $this->db->where('username', $username);
        return $this->db->delete('user');
    }
    
}