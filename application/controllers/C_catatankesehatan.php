<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_catatankesehatan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_catatankesehatan');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['profile_catatankesehatan'] = $this->M_catatankesehatan->getCatatankesehatan($user);
        $this->load->view('viewCatatanKesehatanIH', $data);
    }
}
?>