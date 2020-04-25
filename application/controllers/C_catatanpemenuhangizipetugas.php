<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_catatanpemenuhangizipetugas extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_catatanpemenuhangizipetugas');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['profile_catatanpemenuhangizipetugas'] = $this->M_catatanpemenuhangizipetugas->getCatatanpemenuhangizi($user);
        $this->load->view('viewCatatanPemenuhanGiziPK', $data);
    }
}
?>