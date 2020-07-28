<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('main');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('login');
	}
	public function login_action(){
        $email_user = $this->input->post('email_user');
        $password_user = $this->input->post('password_user');
        $where = array(
            'email_user' => $email_user,
            'password_user' => sha1($password_user)
        );
        $check = $this->main->check_login("tbl_user",$where)->num_rows();
        if($check){

            $data = $this->main->get_login_data("tbl_user",$where);
            $this->session->set_userdata('logged_in', TRUE);
            $this->session->set_userdata('nama_user',$data['nama_user']);
			$this->session->set_userdata('id_level',$data['id_level']);
			$this->session->set_userdata('id_dinas',$data['id_dinas']);

            redirect(site_url('Dashboard'));
        }else{
            ?>
            <script type="text/javascript">alert("Email atau Password salah!");
            window.location.href = "http://localhost/SI-Administrasi/index.php/Login/index";
            </script>
            <?php
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url("Login"));
    }
}
