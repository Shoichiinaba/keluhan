<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    class tabel_m extends CI_Model {
	function index() 
		{
			
		}
		
		
	function get_data(){
		$sql = "SELECT NIM, nama, ruang, nomer_meja, dosen_pengampu, Keluhan, status FROM keluhan";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->result_array();
			$query->free_result();
			return $result;
	} else {
			return array();
	}
}
	}