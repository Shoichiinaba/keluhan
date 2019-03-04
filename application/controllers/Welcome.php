<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
		
		
	function index()
	{
		$this->load->view('home');
	}
	

	public function embed($file)
	{
		echo "<embed src='".base_url('uploads/'.$file)."' width='100%' height='100%'></embed>";
	}
	public function logout()
	{
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('level');
		$this->session->set_flashdata('sukses', 'Teknisi Telah Meninggalkan Menu Teknisi');
		redirect('Login');
	}
	public function update()
	{
		$passlama=$_POST['passlama'];
		$userlama=$_POST['userlama'];
		$user=$_POST['username'];
		$password=$_POST['password'];
		$passwordbaru=$_POST['password_baru'];
		$konfbaru=$_POST['konf_baru'];
		$arr=$this->db->query("select * from login where username='$userlama'")->row_array();
		$cek=$this->db->query("select * from login where username='$user'")->num_rows();
		if($userlama!=$user){
			if($cek>0){
				$this->session->set_flashdata('error', 'Maaf Username Sudah Di Gunakan');
				redirect('Welcome');
			}elseif(md5($password)!=$arr['password']){
				$this->session->set_flashdata('error', 'Maaf Password Lama Anda Salah');
				redirect('Welcome');
			}elseif($passwordbaru!=$konfbaru){
				$this->session->set_flashdata('error', 'Maaf Konfirmasi Password Tidak Sama');
				redirect('Welcome');
			}elseif($passlama!=md5($passwordbaru)){
				$data=array(
					"username"=>$user,
					"password"=>md5($passwordbaru),
				);
			}else{
				$data=array(
					"username"=>$user,
					"password"=>md5($passwordbaru),
				);
			}
		}elseif(md5($password)!=$arr['password']){
			$this->session->set_flashdata('error', 'Maaf Password Lama Anda Salah');
			redirect('Welcome');
		}elseif($passwordbaru!=$konfbaru){
			$this->session->set_flashdata('error', 'Maaf Konfirmasi Password Tidak Sama');
			redirect('Welcome');
		}elseif($passlama!=md5($passwordbaru)){
			$data=array(
				"username"=>$user,
				"password"=>md5($passwordbaru),
			);
		}else{
			$data=array(
				"username"=>$user,
				"password"=>md5($passwordbaru),
			);
		}
		$this->db->where('username', $userlama);
		$this->db->update('login', $data);
		$this->session->set_flashdata('sukses', 'Data Berhasil Di Update');
		redirect('Welcome');
	}
}