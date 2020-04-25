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
        $data['pk']= $this->M_petugaskesehatan->profile_petugaskesehatan($username);
        $this->load->view('editProfilPK', $data);
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
    
    public function updatepkesehatan() {
        $data = [
			"nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "ttl" => $this->input->post('ttl'),
            "kehamilan_ke" => $this->input->post('kehamilan_ke'),
            "no_telp" => $this->input->post('no_telp')
        ];
        $this->M_petugaskesehatan->update_pkesehatan($this->input->post('username'), $data);
        redirect('C_admpetugaskesehatan');
    }

    public function deletepetugaskesehatan($username)
    {
        $this->M_petugaskesehatan->hapus_petugaskesehatan($username);
        $this->M_petugaskesehatan->hapus_userpetugaskesehatan($username);
        redirect('C_admpetugaskesehatan', 'refresh');
    }
}
?>