<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_m extends CI_Model {

	function ceknum($Username,$Password)
	{
		$this->db->where('username', $Username);
		$this->db->where('password', $Password);
		return $this->db->get('login');
	}

}