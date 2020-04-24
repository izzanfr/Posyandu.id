<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile_ih extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_profile_ih');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['profile_ibuhamil'] = $this->M_profile_ih->getProfile($user);
        $this->load->view('profilIH', $data);
    }

    public function edit() {
      $data = [
        "nama" => $this->input->post('nama'),
        "alamat" => $this->input->post('alamat'),
        "ttl" => $this->input->post('ttl'),
        "kehamilan_ke" => $this->input->post('kehamilan_ke'),
        "no_telp" => $this->input->post('no_telp')
      ];
      if ($this->M_profile_ih->editprofile($_SESSION['username'], $data)){
            $data['success'] = "Edit Data Berhasil";
            $this->load->view('profilIH', $data);
      }
   }
}
?>