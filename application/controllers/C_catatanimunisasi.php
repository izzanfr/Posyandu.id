<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_catatanimunisasi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_catatanimunisasi');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['profile_catatanimunisasi'] = $this->M_catatanimunisasi->getCatatanimunisasi($user);
        $this->load->view('viewCatatanImunisasiIH', $data);
    }  
}