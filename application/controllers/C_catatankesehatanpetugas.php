<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_catatankesehatanpetugas extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_catatankesehatan');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['profile_catatankesehatanpetugas'] = $this->M_catatankesehatan->getCatatankesehatanpetugas($user);
        $this->load->view('viewCatatanKesehatanPK', $data);
    }
}
?>