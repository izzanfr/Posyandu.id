<?php 
class M_catatanpemenuhangizipetugas extends CI_Model {
		
    public function catatan_all(){
        $this->db->select('id_catatan');
        $this->db->select('username');
        $this->db->select('tanggal');
        $this->db->select('nama_petugas');
        $this->db->select('umur');
        $this->db->select('vitamin');
        $this->db->select('nasihat');
        $this->db->select('nama_ibu');
        $this->db->from('catatan_pemenuhangizi');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function edit($id_catatan){
        $this->db->select('id_catatan');
        $this->db->select('username');
        $this->db->select('tanggal');
        $this->db->select('nama_petugas');
        $this->db->select('umur');
        $this->db->select('vitamin');
        $this->db->select('nasihat');
        $this->db->select('nama_ibu');
        $this->db->from('catatan_pemenuhangizi');
        $this->db->where('id_catatan', $id_catatan);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_catatangizi($id_catatan, $data)
	{
		$data = [
			"tanggal" => $this->input->post('tanggal', true),
            "umur" => $this->input->post('umur', true),
            "nasihat" => $this->input->post('nasihat', true),
            "vitamin" => $this->input->post('vitamin', true),
        ];
        $this->db->where('id_catatan', $id_catatan);
		return $this->db->update('catatan_pemenuhangizi', $data);
    }

    public function hapus_gizi($id_catatan)
    {
        $this->db->where('id_catatan', $id_catatan);
        return $this->db->delete('catatan_pemenuhangizi');  
    }
}