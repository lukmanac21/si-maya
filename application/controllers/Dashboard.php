<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
		$data['user'] = $this->session->userdata('nama_user'); 
		$this->load->view('dashboard',$data);
	}
}
