<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_catatankesehatanpetugas extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_catatankesehatanpetugas');
        $this->load->library('session');
    }
 
    public function index() {
        $data['profile_catatankesehatanpetugas'] = $this->M_catatankesehatanpetugas->catatan_all();
        $this->load->view('viewCatatanKesehatanPK', $data);
    }

    public function update_ckesehatan($id_catatan) {
        $data['pk']= $this->M_catatankesehatanpetugas->edit($id_catatan);
        $this->load->view('editCatatanKesehatan', $data);
    }

    public function updateckesehatan() {
        $data = [
            "tanggal_pemeriksaan" => $this->input->post('tanggal_pemeriksaan'),
            "keluhan" => $this->input->post('keluhan'),
            "berat" => $this->input->post('berat'),
            "umur" => $this->input->post('umur'),
            "tinggi" => $this->input->post('tinggi'),
            "letak" => $this->input->post('letak'),
            "denyut" => $this->input->post('denyut'),
            "kaki" => $this->input->post('kaki'),
            "hasil" => $this->input->post('hasil'),
            "nasihat" => $this->input->post('nasihat'),
            "kapan" => $this->input->post('kapan')
        ];
        $this->M_catatankesehatanpetugas->update_catatankesehatan($this->input->post('id_catatan'), $data);
        redirect('C_catatankesehatanpetugas');
    }

    public function deletekesehatan($id_catatan)
    {
        $this->M_catatankesehatanpetugas->hapus_kesehatan($id_catatan);
        redirect('C_catatankesehatanpetugas', 'refresh');
    }
}
?>