<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
		$id_role 			= $this->session->userdata('id_role');
		$data['menu'] 		= $this->main->get_menu_selected($id_role); 
        $data['dinas']      = $this->main->get_data('tbl_dinas');
        $data['perihal']    = $this->main->get_data('tbl_perihal'); 
		$this->load->view('surat_baru',$data);
    }
    public function fetch_user(){
        if($this->input->post('id_dinas'))
        {
        echo $this->main->get_fetch_state($this->input->post('id_dinas'));
        }
    }
    public function surat_masuk(){
        $id_role            = $this->session->userdata('id_role');
		$data['menu']       = $this->main->get_menu_selected($id_role); 
		$this->load->view('suratmasuk',$data);
    }
    public function read_surat(){
        $id_role            = $this->session->userdata('id_role');
		$data['menu']       = $this->main->get_menu_selected($id_role); 
		$this->load->view('suratmasuk_baca',$data);
    }
    public function surat_keluar(){

    }
    public function save_data(){
        date_default_timezone_set('Asia/Jakarta');
        $data['id_pengirim'] 		= $this->input->post('id_pengirim');
        $data['id_penerima'] 		= $this->input->post('id_penerima');
        $data['id_perihal'] 		= $this->input->post('id_perihal');
        $data['no_surat'] 		    = $this->input->post('no_surat');
        $data['tgl_surat']          = date('Y-m-d');
        $data['tgl_surat_kirim'] 	= date('Y-m-d H:i:s');
        $data['isi_surat'] 		    = $this->input->post('isi_surat'); 
        $data['status_surat'] 		= $this->input->post('status_surat');

        $this->main->insert_data('tbl_surat',$data);
        redirect('Surat/index');
    }
}
