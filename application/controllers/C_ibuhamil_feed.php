<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ibuhamil_feed extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('username')){
			$this->load->view('ibuhamil-feed');
		}else{
			redirect('user-login');
		}
	}
}
?>