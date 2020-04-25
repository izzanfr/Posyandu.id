<?php 
class M_catatankesehatanpetugas extends CI_Model {
		
    public function catatan_all(){
        $this->db->select('id_catatan');
        $this->db->select('tanggal_pemeriksaan');
        $this->db->select('nama_petugas');
        $this->db->select('nama_ibu');
        $this->db->select('keluhan');
        $this->db->select('berat');
        $this->db->select('umur');
        $this->db->select('tinggi');
        $this->db->select('letak');
        $this->db->select('denyut');
        $this->db->select('kaki');
        $this->db->select('hasil');
        $this->db->select('nasihat');
        $this->db->select('kapan');
        $this->db->from('catatan_kesehatan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function edit($id_catatan){
        $this->db->select('id_catatan');
        $this->db->select('tanggal_pemeriksaan');
        $this->db->select('nama_petugas');
        $this->db->select('nama_ibu');
        $this->db->select('keluhan');
        $this->db->select('berat');
        $this->db->select('umur');
        $this->db->select('tinggi');
        $this->db->select('letak');
        $this->db->select('denyut');
        $this->db->select('kaki');
        $this->db->select('hasil');
        $this->db->select('nasihat');
        $this->db->select('kapan');
        $this->db->from('catatan_kesehatan');
        $this->db->where('id_catatan', $id_catatan);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_catatankesehatan($id_catatan, $data)
	{
		$data = [
			"tanggal_pemeriksaan" => $this->input->post('tanggal_pemeriksaan', true),
            "keluhan" => $this->input->post('keluhan', true),
            "berat" => $this->input->post('berat', true),
            "umur" => $this->input->post('umur', true),
            "tinggi" => $this->input->post('tinggi', true),
            "letak" => $this->input->post('letak', true),
            "denyut" => $this->input->post('denyut', true),
            "kaki" => $this->input->post('kaki', true),
            "hasil" => $this->input->post('hasil', true),
            "nasihat" => $this->input->post('nasihat', true),
            "kapan" => $this->input->post('kapan', true)
        ];
        $this->db->where('id_catatan', $id_catatan);
		return $this->db->update('catatan_kesehatan', $data);
    }

    public function hapus_kesehatan($id_catatan)
    {
        $this->db->where('id_catatan', $id_catatan);
        return $this->db->delete('catatan_kesehatan');  
    }
}