<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keluhan extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('keluhan_m');
	
	}
	
	function index()
	{
		$this->load->view('form_respone');
	}
	
	function insert() {
		$NIM = $this->input->post('NIM');
		$nama = $this->input->post('nama');
		$ruang = $this->input->post('ruang');
		$nomer_meja = $this->input->post('nomer_meja');
		$dosen_pengampu = $this->input->post('dosen_pengampu');
		$Keluhan = $this->input->post('Keluhan');
		$status = $this->input->post('status');
		$params = array($NIM, $nama, $ruang, $nomer_meja, $dosen_pengampu, $Keluhan, $status);
		$this->keluhan_m->insert($params);
		
		
		
		return redirect('keluhan');
	}

	function yes()
	{
		$this->load->view('form');
	}
}