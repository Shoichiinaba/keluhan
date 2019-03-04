<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class status extends CI_Controller {
		function __construct() {
		parent::__construct();
		$this->load->model('tabel_m');
		}
	function index()
	{
		$rs_data['result'] = $this->tabel_m->get_data();
		$this->load->view('tabel', $rs_data);
	}
	

}