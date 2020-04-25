<?php 
class M_inputkesehatan extends CI_Model {
		
	public function getCatatankesehatan($username) {
        $this->db->select('*');
        $this->db->from('catatan_kesehatan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambah_kesehatan($data)
	{
		$data= [
            "username" => $this->input->post('username'),
			"tanggal_pemeriksaan" => $this->input->post('tanggal_pemeriksaan'),
            "nama_petugas" => $this->input->post('nama_petugas'),
            "keluhan" => $this->input->post('keluhan'),
            "berat" => $this->input->post('berat'),
            "umur" => $this->input->post('umur'),
            "tinggi" => $this->input->post('tinggi'),
            "letak" => $this->input->post('letak'),
            "denyut" => $this->input->post('denyut'),
            "kaki" => $this->input->post('kaki'),
            "hasil" => $this->input->post('hasil'),
            "nasihat" => $this->input->post('nasihat'),
            "kapan" => $this->input->post('kapan'),
            "nama_ibu" => $this->input->post('nama_ibu')
        ];
		return $this->db->insert('catatan_kesehatan', $data);
    }
}