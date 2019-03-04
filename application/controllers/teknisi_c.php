<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teknisi_c extends CI_Controller {
		function __construct() {
		parent::__construct();
		$this->load->model('teknisi_m');
		}
	function index()
	{
		$rs_data['result'] = $this->teknisi_m->get_data();
		$this->load->view('teknisi/teknisi_v', $rs_data);
	}
	
	function delete($params = '') {
		
		$min["result"] = $this->teknisi_m->hapus($params);
		
		if($min["result"] == 1){
			
			redirect('teknisi_c');
			
		}
		
	}

	function edit($params = '') {
		$rs_data['result'] = $this->teknisi_m->edit($params);
		$this->load->view('teknisi/form_teknisi', $rs_data);
	}
			
	function edit_view($param){
			
			$data['result'] = $this->teknisi_m->edit_view($param);
			if($data['result'] == false){
				redirect("teknisi_c");
			}else{
				$this->load->view('teknisi/form_teknisi', $data);
			}
	}
	
	function update() {
		
		$nim = $this->input->post('nim');
		
		$nama = $this->input->post('nama');
		
		$ruang = $this->input->post('ruang');
		
		$nomer_meja = $this->input->post('nomer_meja');
		
		$dosen_pengampu = $this->input->post('dosen_pengampu');
		
		$keluhan = $this->input->post('keluhan');
		
		$status = $this->input->post('status');
		
		
		
		 $params = array($nim, $nama, $ruang, $nomer_meja, $dosen_pengampu, $keluhan, $status, $nim);
		
		
		$result = ($this->teknisi_m->update($params) == 1) ? redirect('teknisi_c') : "<b>Gagal Load</b>";
		
		/* return redirect('teknisi_c'); */
		
	}
	
}