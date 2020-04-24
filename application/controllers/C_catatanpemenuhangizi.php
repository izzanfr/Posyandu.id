<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_catatanpemenuhangizi extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_catatanpemenuhangizi');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['profile_catatanpemenuhangizi'] = $this->M_catatanpemenuhangizi->getCatatanpemenuhangizi($user);
        $this->load->view('viewCatatanPemenuhanGiziIH', $data);
    }
}
?>