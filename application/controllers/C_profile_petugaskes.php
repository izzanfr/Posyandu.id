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
}
?>