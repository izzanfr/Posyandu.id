<?php 
class M_inputimunisasi extends CI_Model {
		
	public function getCatatanimunisasi($username) {
        $this->db->select('*');
        $this->db->from('catatan_imunisasi');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambah_imunisasi($data)
	{
		$data= [
            "username" => $this->input->post('username'),
			"nama_petugas" => $this->input->post('nama_petugas'),
			"umur" => $this->input->post('umur'),
			"tanggal" => $this->input->post('tanggal'),
            "vaksin" => $this->input->post('vaksin')
        ];
		return $this->db->insert('catatan_imunisasi', $data);
    }

    public function hapus_imunisasi()
    {
        $this->db->where('username', $username);
        return $this->db->delete('catatan_imunisasi');  
    }
}