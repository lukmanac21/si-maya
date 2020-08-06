<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
		$data['user'] 		    = $this->session->userdata('nama_user');
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
        $data['sub_menu'] 	    = $this->main->get_data_join('tbl_sub_menu','tbl_menu','tbl_sub_menu.id_menu = tbl_menu.id_menu');

		$this->load->view('submenu',$data);
	}
	public function add_data(){
		$data['user'] 		    = $this->session->userdata('nama_user');
		$id_role            	= $this->session->userdata('id_role');
		$data['menu']       	= $this->main->get_menu_selected($id_role); 
		$this->load->view('submenu_tambah',$data);
	}
	public function save_data(){
        $data['id_menu'] 	    = $this->input->post('id_menu');
		$data['nama_sub_menu'] 	= $this->input->post('nama_sub_menu');
		$data['link_sub_menu']	= $this->input->post('link_sub_menu');

		$this->main->insert_data('tbl_sub_menu',$data);
		redirect('Submenu/index');
	}
	public function edit_data($id_sub_menu){
		$id_role 				= $this->session->userdata('id_role');
		$data['menu'] 			= $this->main->get_menu_selected($id_role); 
		$where 				    = ['id_sub_menu' => $id_sub_menu];
		$data['sub_menu'] 	    = $this->main->get_data_where('tbl_sub_menu',$where);

		$this->load->view('submenu_ubah',$data);
	}
	public function update_data(){
        $where['id_sub_menu'] 	= $this->input->post('id_sub_menu');
        $data['id_menu'] 	    = $this->input->post('id_menu');
		$data['nama_sub_menu'] 	= $this->input->post('nama_sub_menu');
		$data['link_sub_menu'] 	= $this->input->post('link_sub_menu');

		$this->main->update_data('tbl_sub_menu',$data,$where);
		redirect('Submenu/index');
	}
	public function delete_data(){
		$where['id_sub_menu'] 	= $this->input->post('id_sub_menu');
		
		$this->main->delete_data('tbl_sub_menu',$where);
		redirect('Submenu/index');
	}
}
