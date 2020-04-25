<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_inputpemenuhangizi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_inputpemenuhangizi');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['gizi'] = $this->M_inputpemenuhangizi->getCatatanpemenuhangizi($user);
        $this->load->view('formCatatanPemenuhanGizi', $data);
    }

    public function tambahpemenuhangizi()
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
        $this->M_inputpemenuhangizi->tambah_pemenuhangizi($data);
        redirect('C_catatanpemenuhangizipetugas');
    }  
}