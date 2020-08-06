<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statussurat extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
		$id_role 					= $this->session->userdata('id_role');
		$data['menu'] 				= $this->main->get_menu_selected($id_role); 
        $data['status_surat'] 	        = $this->main->get_data('tbl_status_surat');

		$this->load->view('statussurat',$data);
	}
	public function add_data(){
		$id_role 					= $this->session->userdata('id_role');
		$data['menu'] 				= $this->main->get_menu_selected($id_role); 

		$this->load->view('statussurat_tambah',$data);
	}
	public function save_data(){
		$data['nama_status_surat'] 	    = $this->input->post('nama_status_surat');

		$this->main->insert_data('tbl_status_surat',$data);
		redirect('statussurat/index');
	}
	public function edit_data($id_status_surat){
		$id_role 					= $this->session->userdata('id_role');
		$data['menu'] 				= $this->main->get_menu_selected($id_role); 
		$where 				        = ['id_status_surat' => $id_status_surat];
		$data['status_surat'] 	        = $this->main->get_data_where('tbl_status_surat',$where);

		$this->load->view('statussurat_ubah',$data);
	}
	public function update_data(){
        $where['id_status_surat'] 	    = $this->input->post('id_status_surat');
		$data['nama_status_surat'] 	    = $this->input->post('nama_status_surat');

		$this->main->update_data('tbl_status_surat',$data,$where);
		redirect('statussurat/index');
	}
	public function delete_data(){
		$where['id_status_surat'] 	    = $this->input->post('id_status_surat');
		
		$this->main->delete_data('tbl_status_surat',$where);
		redirect('statussurat/index');
	}
}
