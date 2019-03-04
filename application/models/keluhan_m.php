<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    class keluhan_m extends CI_Model {
	function index() 
		{
			
		}
	
	
	function insert($params =''){
		$sql = "INSERT INTO keluhan (NIM, nama, ruang, nomer_meja, dosen_pengampu, Keluhan, status) VALUES (?, ?, ?, ?, ?, ?, ?)"; // perintah query insert data.
		return $this->db->query($sql,$params);

	}
			
			
			
}