<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
        $this->load->helper('main_helper');
    }
	public function index()
	{
		$id_role 					= $this->session->userdata('id_role');
		$data['menu'] 				= $this->main->get_menu_selected($id_role); 
		$data['role']           	= $this->main->get_data_where('tbl_role','id_role != 1');

		$this->load->view('role',$data);
	}
	public function add_data(){
		$id_role 					= $this->session->userdata('id_role');
		$data['menu'] 				= $this->main->get_menu_selected($id_role); 

		$this->load->view('role_tambah',$data);
	}
	public function save_data(){
		$data['nama_role'] 	    = $this->input->post('nama_role');

		$this->main->insert_data('tbl_role',$data);
		redirect('role/index');
    }
    public function role_access($id_role){
        $id_role 					= $this->session->userdata('id_role');
		$data['menu'] 				= $this->main->get_menu_selected($id_role); 
        $data['sub_menu'] 		    = $this->main->get_data('tbl_sub_menu');
		$where 				        = ['id_role' => $id_role];
        $data['role']               = $this->db->get_where('tbl_role',['id_role'=>$id_role])->row_array();
		$this->load->view('role_akses',$data);
    }
    public function change_access(){

        $id_sub_menu = $this->input->post('menuId');
        $id_role = $this->input->post('roleId');

        $data = array(
            'id_sub_menu' => $id_sub_menu,
            'id_role' => $id_role
        );
        $result = $this->db->get_where('tbl_user_access',$data);
        var_dump($result);
        if($result->num_rows() < 1){
            $this->db->insert('tbl_user_access',$data);
        }else{
            $this->db->delete('tbl_user_access',$data);
        }
    }
	public function edit_data($id_role){
		$id_role 					= $this->session->userdata('id_role');
		$data['menu'] 				= $this->main->get_menu_selected($id_role); 
		$where 				        = ['id_role' => $id_role];
		$data['role'] 	            = $this->main->get_data_where('tbl_role',$where);

		$this->load->view('role_ubah',$data);
	}
	public function update_data(){
        $where['id_role'] 	    = $this->input->post('id_role');
		$data['nama_role'] 	    = $this->input->post('nama_role');

		$this->main->update_data('tbl_role',$data,$where);
		redirect('role/index');
	}
	public function delete_data(){
		$where['id_role'] 	    = $this->input->post('id_role');
		
		$this->main->delete_data('tbl_role',$where);
		redirect('role/index');
	}
}
