<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_inputimunisasi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_inputimunisasi');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['iprofile_catatanimunisasipetugas'] = $this->M_inputimunisasi->getCatatanimunisasi($user);
        $this->load->view('formCatatanImunisasi', $data);
    }

    public function tambahimunisasi()
    {
        $data= [
            "id_catatan" => "",
            "username" => $this->input->post('username'),
            "nama_petugas" => $this->input->post('nama_petugas'),
            "umur" => $this->input->post('umur'),
            "tanggal" => $this->input->post('tanggal'),
            "vaksin" => $this->input->post('vaksin'),
            "nama_ibu" => $this->input->post('nama_ibu')
        ];
        $this->M_inputimunisasi->tambah_imunisasi($data);
        redirect('C_catatanimunisasipetugas');
    }  

    
}