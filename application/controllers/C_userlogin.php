<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class C_userLogin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_userlogin');
        $this->load->library('session');
    }
    
    public function index()
    {
        $this->load->view('user-login');
    }

    public function aksi_login() {
        $data['username'] = $this->input->post('username');
   		$data['password'] = $this->input->post('password');
		 
		if($this->M_userlogin->login($data)) {
            $data = $this->M_userlogin->getProfile($this->input->post('username'));
                if($data['level'] == 'ibu_hamil') {   
                    $this->load->view('v_menu2');                      
                    $this->load->view('ibuhamil-feed');
                } else if ($data['level'] == "petugas_kesehatan") {   
                    $this->load->view('navbar-PK');            
                    $this->load->view('petugas-kesehatan');
                } else if ($data['level'] == "petugas_registrasi") {  
                    $this->load->view('admin');
                }
   			$this->session->set_userdata('username', $this->input->post('username'));
    		$this->session->set_userdata('password', $this->input->post('password'));
		} 
		else {
            redirect('C_userlogin', $data); 
        }
    }
}
?>