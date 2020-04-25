<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_catatanpemenuhangizipetugas extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_catatanpemenuhangizipetugas');
        $this->load->library('session');
    }
 
    public function index() {
        $data['profile_catatanpemenuhangizipetugas'] = $this->M_catatanpemenuhangizipetugas->catatan_all();
        $this->load->view('viewCatatanPemenuhanGiziPK', $data);
    }

    public function update_cgizi($id_catatan) {
        $data['pg']= $this->M_catatanpemenuhangizipetugas->edit($id_catatan);
        $this->load->view('editCatatanPemenuhanGizi', $data);
    }

    public function updatecgizi() {
        $data = [
            "tanggal" => $this->input->post('tanggal'),
            "umur" => $this->input->post('umur'),
            "nasihat" => $this->input->post('nasihat'),
            "vitamin" => $this->input->post('vitamin'),
        ];
        $this->M_catatanpemenuhangizipetugas->update_catatangizi($this->input->post('id_catatan'), $data);
        redirect('C_catatanpemenuhangizipetugas');
    }

    public function deletegizi($id_catatan)
    {
        $this->M_catatanpemenuhangizipetugas->hapus_gizi($id_catatan);
        redirect('C_catatanpemenuhangizipetugas', 'refresh');
    }
}
?>