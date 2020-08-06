<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perihalsurat extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
		$id_role 					= $this->session->userdata('id_role');
		$data['menu'] 				= $this->main->get_menu_selected($id_role); 
        $data['perihal'] 	        = $this->main->get_data('tbl_perihal');

		$this->load->view('perihalsurat',$data);
	}
	public function add_data(){
		$id_role 					= $this->session->userdata('id_role');
		$data['menu'] 				= $this->main->get_menu_selected($id_role); 

		$this->load->view('perihalsurat_tambah',$data);
	}
	public function save_data(){
        $data['kode_perihal'] 	    = $this->input->post('kode_perihal');
		$data['nama_perihal'] 	    = $this->input->post('nama_perihal');

		$this->main->insert_data('tbl_perihal',$data);
		redirect('Perihalsurat/index');
	}
	public function edit_data($id_perihal){
		$id_role 					= $this->session->userdata('id_role');
		$data['menu'] 				= $this->main->get_menu_selected($id_role); 
		$where 				        = ['id_perihal' => $id_perihal];
		$data['perihal'] 	        = $this->main->get_data_where('tbl_perihal',$where);

		$this->load->view('perihalsurat_ubah',$data);
	}
	public function update_data(){
        $where['id_perihal'] 	    = $this->input->post('id_perihal');
        $data['kode_perihal'] 	    = $this->input->post('kode_perihal');
		$data['nama_perihal'] 	    = $this->input->post('nama_perihal');

		$this->main->update_data('tbl_perihal',$data,$where);
		redirect('perihalsurat/index');
	}
	public function delete_data(){
		$where['id_perihal'] 	    = $this->input->post('id_perihal');
		
		$this->main->delete_data('tbl_perihal',$where);
		redirect('perihalsurat/index');
	}
}
