<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile_petugaskes extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_profile_petugaskes');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['pki'] = $this->M_profile_petugaskes->getProfile($user);
        $this->load->view('profilPK', $data);
    }

    public function editPetugas() {
      $data = [
        "nama" => $this->input->post('nama'),
        "alamat" => $this->input->post('alamat'),
        "no_telp" => $this->input->post('no_telp'),
        "jenis_kelamin" => $this->input->post('jenis_kelamin')
      ];
      if ($this->M_profile_petugaskes->editprofile($_SESSION['username'], $data)) {
          $data['success'] = "Edit Data Berhasil";
          $this->load->view('profilPK', $data);
      }
   }  
}
?>