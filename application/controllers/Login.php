<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
    parent::__construct();
    if ($this->session->userdata('username')) {
      redirect(base_url('Login'));
    }
    $this->load->model(array('login_m'));
  }
	function index()
	{
		$this->load->view('v_login');
	}
	function signin(){
		$Username=$this->security->sanitize_filename($_POST['username']);
		$Password=$this->security->sanitize_filename($_POST['password']);
		$ceknum=$this->login_m->ceknum($Username,$Password)->num_rows();
		$rows=$this->login_m->ceknum($Username,$Password)->row_array();
		if($ceknum>0){
			$this->session->set_userdata('id',$rows['id']);
			$this->session->set_userdata('user',$Username);
			$this->session->set_userdata('level',$rows['akses']);
			redirect('teknisi_c');
		}else{
			$this->session->set_flashdata('error','Maaf Anda Gagal Login');
			redirect('Login');
		}

	}
}