<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
    public function index()
    {
        $this->load->view('v_home');
    }
}