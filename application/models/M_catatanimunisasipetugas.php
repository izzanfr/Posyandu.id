<?php 
class M_catatanimunisasipetugas extends CI_Model {
		
    public function catatan_all(){
        $this->db->select('id_catatan');
        $this->db->select('username');
        $this->db->select('nama_petugas');
        $this->db->select('nama_ibu');
        $this->db->select('umur');
        $this->db->select('tanggal');
        $this->db->select('vaksin');
        $this->db->from('catatan_imunisasi');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function edit($id_catatan){
        $this->db->select('id_catatan');
        $this->db->select('username');
        $this->db->select('nama_petugas');
        $this->db->select('nama_ibu');
        $this->db->select('umur');
        $this->db->select('tanggal');
        $this->db->select('vaksin');
        $this->db->from('catatan_imunisasi');
        $this->db->where('id_catatan', $id_catatan);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_catimunisasi($id_catatan, $data)
	{
		$data = [
			"nama_ibu" => $this->input->post('nama_ibu', true),
            "umur" => $this->input->post('umur', true),
            "tanggal" => $this->input->post('tanggal', true),
            "vaksin" => $this->input->post('vaksin', true)
        ];
        $this->db->where('id_catatan', $id_catatan);
		return $this->db->update('catatan_imunisasi', $data);
    }

    public function hapus_imunisasi($id_catatan)
    {
        $this->db->where('id_catatan', $id_catatan);
        return $this->db->delete('catatan_imunisasi');  
    }
}