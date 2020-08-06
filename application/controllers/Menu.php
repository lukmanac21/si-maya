<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
		$data['data_menu'] 		= $this->main->get_data('tbl_menu');

		$this->load->view('menu',$data);
	}
	public function add_data(){
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 

		$this->load->view('menu_tambah',$data);
	}
	public function save_data(){
		$data['nama_menu'] 		= $this->input->post('nama_menu');
		$data['icon_menu']		= $this->input->post('icon_menu');

		$this->main->insert_data('tbl_menu',$data);
		redirect('Menu/index');
	}
	public function edit_data($id_menu){
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
		$where 					= ['id_menu' => $id_menu];
		$data['data_menu'] 		= $this->main->get_data_where('tbl_menu',$where);

		$this->load->view('menu_ubah',$data);
	}
	public function update_data(){
		$where['id_menu'] 		= $this->input->post('id_menu');
		$data['nama_menu'] 		= $this->input->post('nama_menu');
		$data['icon_menu'] 		= $this->input->post('icon_menu');

		$this->main->update_data('tbl_menu',$data,$where);
		redirect('Menu/index');
	}
	public function delete_data(){
		$where['id_menu'] 		= $this->input->post('id_menu');
		
		$this->main->delete_data('tbl_menu',$where);
		redirect('Menu/index');
	}
}
