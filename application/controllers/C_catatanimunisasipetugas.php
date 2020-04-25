<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_catatanimunisasipetugas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_catatanimunisasipetugas');
        $this->load->library('session');
    }
 
    public function index() {
        $data['profile_catatanimunisasipetugas'] = $this->M_catatanimunisasipetugas->catatan_all();
        $this->load->view('viewCatatanImunisasiPK', $data);
    }

    public function update_imunisasi($id_catatan) {
        $data['pi']= $this->M_catatanimunisasipetugas->edit($id_catatan);
        $this->load->view('editCatatanImunisasi', $data);
    }

    public function updateimunisasi() {
        $data = [
            "nama_ibu" => $this->input->post('nama_ibu'),
            "umur" => $this->input->post('umur'),
            "tanggal" => $this->input->post('tanggal'),
            "vaksin" => $this->input->post('vaksin')
        ];
        $this->M_catatanimunisasipetugas->update_catimunisasi($this->input->post('id_catatan'), $data);
        redirect('C_catatanimunisasipetugas');
    }

    public function deleteimunisasi($id_catatan)
    {
        $this->M_catatanimunisasipetugas->hapus_imunisasi($id_catatan);
        redirect('C_catatanimunisasipetugas', 'refresh');
    }
}