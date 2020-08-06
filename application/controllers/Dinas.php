<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinas extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
        $data['dinas'] 			= $this->main->get_data('tbl_dinas'); 
		$this->load->view('dinas',$data);
	}
	public function add_data(){
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
		$this->load->view('dinas_tambah',$data);
	}
	public function save_data(){
		$data['nama_dinas'] 	= $this->input->post('nama_dinas');
		$data['alamat_dinas'] 	= $this->input->post('alamat_dinas');
		$this->main->insert_data('tbl_dinas',$data);
		redirect('Dinas/index');
	}
	public function edit_data($id_dinas){
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
		$where 					= ['id_dinas' => $id_dinas];
		$data['dinas'] 			= $this->main->get_data_where('tbl_dinas',$where);
		$this->load->view('dinas_ubah',$data);
	}
	public function update_data(){
		$where['id_dinas'] 		= $this->input->post('id_dinas');
		$data['nama_dinas'] 	= $this->input->post('nama_dinas');
		$data['alamat_dinas'] 	= $this->input->post('alamat_dinas');
		$this->main->update_data('tbl_dinas',$data,$where);
		redirect('Dinas/index');

	}
}
