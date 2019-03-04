<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

    class transaksi_m extends CI_Model {
		
	function index() 
		{
			
		}
		
		
	function get_data(){
		$sql = "SELECT a.*,b.nama_teknisi FROM (SELECT Id_trx, teknisi, nama_komponen, harga, jumlah_komp, total_harga, tgl_pengerjaan FROM transaksi) a
				JOIN teknisi b ON a.teknisi=b.id_teknisi";		
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->result_array();
			$query->free_result();
			return $result;
	} else {
			return array();
	}
	}
	
	function tampilkan(){
         
        $query = $this->db->get('transaksi');
        return $query->result();
	}
	function insert($params ='')
	{
		$sql = "INSERT INTO transaksi (Id_trx,teknisi, nama_komponen, harga, jumlah_komp, total_harga, tgl_pengerjaan) VALUES (?, ?, ?, ?, ?, ?, ?)";

		// perintah query insert data.
		return $this->db->query($sql, $params);
	}
	
	function get_teknisi()
	{
		$sql = "SELECT id_teknisi, nama_teknisi FROM teknisi";
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
		
		$sql_query = "DELETE FROM `keluhandb`.`transaksi` WHERE `transaksi`.`Id_trx` = ?";
		
		$query = $this->db->query($sql_query, $params);
		
		return $query;
	}

	function edit_view($param){
		$sql = "SELECT * FROM `transaksi` WHERE Id_trx = ?";
		$query = $this->db->query($sql, $param);
		if($query->num_rows() > 0){
			$result = $query->row_array();
			$query->free_result();
			return $result;
		} else {
			return array();
		}
	}

	function update($params){
		$sql = "UPDATE transaksi SET teknisi = ?, nama_komponen = ?, harga = ?, jumlah_komp = ?, total_harga = ?, tgl_pengerjaan = ? WHERE Id_trx = ?";
		
		return $this->db->query($sql, $params);
	}
		
	}