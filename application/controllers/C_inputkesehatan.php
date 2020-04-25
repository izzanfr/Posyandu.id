<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_inputkesehatan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_inputkesehatan');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['kesehatan'] = $this->M_inputkesehatan->getCatatankesehatan($user);
        $this->load->view('formCatatanKesehatan', $data);
    }

    public function tambahkesehatan()
    {
        $data= [
            "id_catatan" => "",
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
        $this->M_inputkesehatan->tambah_kesehatan($data);
        redirect('C_catatankesehatanpetugas');
    }  
}