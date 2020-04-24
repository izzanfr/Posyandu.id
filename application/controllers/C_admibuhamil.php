<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admibuhamil extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_ibuhamil');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['profile_ibuhamil'] = $this->M_ibuhamil->getIbuHamil($user);
        $this->load->view('adminibuhamil', $data);
    }

    public function tambah() {
        $this->load->view('formDaftarIH');
    }

    public function update($username) {
        $user = $this->session->userdata('username');
        $data['profile_ibuhamil'] = $this->M_ibuhamil->profile_ibuhamil($user);
        $this->load->view('editProfilIH', $data);
        // $profile = $this->M_ibuhamil->profile_ibuhamil($username);
        // $this->load->view('editProfilIH',['data'=>$profile]);
        //$this->session->set_userdata('akun','$username');
        //echo $username;
        //$this->load->view('editProfilIH');
    }

    public function tambahibuhamil()
	{
		$data= [
			"id_registrasi" => $this->input->post('id_registrasi'),
			"nama" => $this->input->post('nama'),
			"username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "alamat" => $this->input->post('alamat'),
            "ttl" => $this->input->post('ttl'),
            "kehamilan_ke" => $this->input->post('kehamilan_ke'),
            "no_telp" => $this->input->post('no_telp')
        ];
        
        $data2= [
            'id' => '',
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => 'ibu_hamil'
        ];
		$this->M_ibuhamil->tambah_ibuhamil($data, $data2);
		redirect('C_admibuhamil');
    }
    
    public function updateibuhamil() {
        $data = [
			"nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "ttl" => $this->input->post('ttl'),
            "kehamilan_ke" => $this->input->post('kehamilan_ke'),
            "no_telp" => $this->input->post('no_telp')
        ];
        // if ($this->M_ibuhamil->edit_ibuhamil($_SESSION['username'], $data)){
        //       $data['success'] = "Edit Data Berhasil";
        //       redirect('C_admibuhamil');
        $this->M_ibuhamil->update_ibuhamil($this->input->post('username'), $data);
        redirect('C_admibuhamil');
    }

    public function deleteibuhamil($username)
    {
        $this->M_ibuhamil->hapus_ibuhamil($username);
        $this->M_ibuhamil->hapus_useribuhamil($username);
        redirect('C_admibuhamil', 'refresh');
    }
}
