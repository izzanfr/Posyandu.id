<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_catatanimunisasipetugas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_catatanimunisasi');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['profile_catatanimunisasipetugas'] = $this->M_catatanimunisasi->getCatatanimunisasi($user);
        $this->load->view('viewCatatanImunisasiPK', $data);
    }  
}