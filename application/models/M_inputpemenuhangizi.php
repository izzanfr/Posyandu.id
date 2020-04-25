<?php 
class M_inputpemenuhangizi extends CI_Model {
		
	public function getCatatanpemenuhangizi($username) {
        $this->db->select('*');
        $this->db->from('catatan_pemenuhangizi');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambah_pemenuhangizi($data)
	{
		$data= [
            "username" => $this->input->post('username'),
			"tanggal" => $this->input->post('tanggal'),
			"nama_petugas" => $this->input->post('nama_petugas'),
			"umur" => $this->input->post('umur'),
            "nasihat" => $this->input->post('nasihat'),
            "vitamin" => $this->input->post('vitamin'),
            "nama_ibu" => $this->input->post('nama_ibu')
        ];
		return $this->db->insert('catatan_pemenuhangizi', $data);
    }
}