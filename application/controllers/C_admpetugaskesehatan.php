<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admpetugaskesehatan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_petugaskesehatan');
        $this->load->library('session');
    }
 
    public function index() {
        $user = $this->session->userdata('username');
        $data['profile_petugaskesehatan'] = $this->M_petugaskesehatan->getPKesehatan($user);
        $this->load->view('adminPetugasKesehatan', $data);
    }

    public function tambah_petugaskesehatan() {
        $this->load->view('formDaftarPK');
    }

    public function update_petugaskesehatan($username) {
        $user = $this->session->userdata('username');
        $data['profile_pkesehatan'] = $this->M_petugaskesehatan->profile_pkesehatan($user);
        $this->load->view('editProfilPK', $data);
        // $profile = $this->M_ibuhamil->profile_ibuhamil($username);
        // $this->load->view('editProfilIH',['data'=>$profile]);
        //$this->session->set_userdata('akun','$username');
        //echo $username;
        //$this->load->view('editProfilIH');
    }

    public function tambahpetugaskesehatan()
	{
		$data= [
			"nip" => $this->input->post('nip'),
			"nama" => $this->input->post('nama'),
			"username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "alamat" => $this->input->post('alamat'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "no_telp" => $this->input->post('no_telp')
        ];
        
        $data2= [
            'id' => '',
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => 'petugas_kesehatan'
        ];
		$this->M_petugaskesehatan->tambah_pkesehatan($data, $data2);
		redirect('C_admpetugaskesehatan');
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

    public function deletepetugaskesehatan($username)
    {
        $this->M_petugaskesehatan->hapus_petugaskesehatan($username);
        $this->M_petugaskesehatan->hapus_userpetugaskesehatan($username);
        redirect('C_admpetugaskesehatan', 'refresh');
    }
}
?>