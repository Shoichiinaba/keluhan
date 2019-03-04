<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

    class teknisi_m extends CI_Model {
		
	function index() 
		{
			
		}
		
		
	function get_data(){
		$sql = "SELECT NIM, nama, ruang, nomer_meja, dosen_pengampu, Keluhan, status FROM keluhan where keluhan = 'rusak'";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->result_array();
			$query->free_result();
			return $result;
	} else {
			return array();
	}
	}
	
	function hapus($params){
		
		$sql_query = "DELETE FROM `keluhandb`.`keluhan` WHERE `keluhan`.`NIM` = ?";
		
		$query = $this->db->query($sql_query, $params);
		
		return $query;
	}

	
	function edit_view($param){
		$sql = "SELECT * FROM keluhan WHERE NIM = ?";
		$query = $this->db->query($sql, $param);
		if($query->num_rows() == 1){
			$result = $query->row_array();
			$query->free_result();
			return $result;
		} else {
			return false;
		}
	}
	
	function update(){
		
		$sql = "UPDATE keluhan SET NIM = ?, nama = ?, ruang = ?, nomer_meja = ?, dosen_pengampu = ?, Keluhan = ?, status = ? WHERE NIM = ?";
		
		return $this->db->query($sql);
	}

	}