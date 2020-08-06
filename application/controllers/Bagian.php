<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
		$data['user'] 		    = $this->session->userdata('nama_user');
		$id_role 				= $this->session->userdata('id_role');
		$id_dinas				= $this->session->userdata('id_dinas');
		$where 				    = ['id_dinas' => $id_dinas];
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
        $data['bagian'] 	    = $this->main->get_data_where('tbl_bagian',$where);

		$this->load->view('bagian',$data);
	}
	public function add_data(){
		$data['user'] 		    = $this->session->userdata('nama_user');
		$id_role            	= $this->session->userdata('id_role');
		$data['menu']       	= $this->main->get_menu_selected($id_role); 
		$this->load->view('bagian_tambah',$data);
	}
	public function save_data(){
		$data['id_dinas'] 		= $this->input->post('id_dinas');
		$data['nama_bagian'] 	= $this->input->post('nama_bagian');

		$this->main->insert_data('tbl_bagian',$data);
		redirect('bagian/index');
	}
	public function edit_data($id_bagian){
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
		$where 				    = ['id_bagian' => $id_bagian];
		$data['bagian'] 	    = $this->main->get_data_where('tbl_bagian',$where);

		$this->load->view('bagian_ubah',$data);
	}
	public function update_data(){
		$where['id_bagian']		= $this->input->post('id_bagian');
		$data['id_dinas'] 		= $this->input->post('id_dinas');
		$data['nama_bagian'] 	= $this->input->post('nama_bagian');

		$this->main->update_data('tbl_bagian',$data,$where);
		redirect('bagian/index');
	}
	public function delete_data(){
		$where['id_bagian'] 	= $this->input->post('id_bagian');
		
		$this->main->delete_data('tbl_bagian',$where);
		redirect('bagian/index');
	}
}
