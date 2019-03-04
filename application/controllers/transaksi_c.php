<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_c extends CI_Controller {
		function __construct() {
		parent::__construct();
		$this->load->model('transaksi_m');
		
		
		$this->load->library('cfpdf');
		}
	function index()
	{
		$rs_data['result'] = $this->transaksi_m->get_data();
		$this->load->view('teknisi/transaksi_v', $rs_data);
	}
	function add() 
	{
		$rs_data['teknisi'] = $this->transaksi_m->get_teknisi();
		$this->load->view('teknisi/form_transaksi', $rs_data);
	}
	function insert() 
	{
		$Id_trx = $this->input->post('Id_trx');
		$teknisi = $this->input->post('teknisi');
		$nama_komponen = $this->input->post('nama_komponen');
		$harga = $this->input->post('harga');
		$jumlah_komp = $this->input->post('jumlah_komp');
		$total_harga = $this->input->post('total_harga');
		$tgl_pengerjaan = $this->input->post('tgl_pengerjaan');
		$params = array($Id_trx, $teknisi, $nama_komponen, $harga, $jumlah_komp, $total_harga, $tgl_pengerjaan);
	//memangil fungsi dari model.
		$this->transaksi_m->insert($params);
		return redirect('transaksi_c');
	}
	
	function delete($params = '') {
		
		$min["result"] = $this->transaksi_m->hapus($params);
		
		if($min["result"] == 1){
			
			redirect('transaksi_c');
			
		}
	}
	function edit_view($param){
			$rs_data['teknisi'] = $this->transaksi_m->get_teknisi();
			$rs_data['result'] = $this->transaksi_m->edit_view($param);
				$this->load->view('teknisi/form_transaksi_update', $rs_data);
			}
	
	function update() {
		
		$Id_trx = $this->input->post('Id_trx');
		$teknisi = $this->input->post('teknisi');
		$nama_komponen = $this->input->post('nama_komponen');
		$harga = $this->input->post('harga');
		$jumlah_komp = $this->input->post('jumlah_komp');
		$total_harga = $this->input->post('total_harga');
		$tgl_pengerjaan = $this->input->post('tgl_pengerjaan');
		 $params = array($teknisi, $nama_komponen, $harga, $jumlah_komp, $total_harga, $tgl_pengerjaan, $Id_trx);
		 $this->transaksi_m->update($params);
        return redirect('transaksi_c');
	}

	function penjumlahan(){
		$data['harga']=(int)$this->input->post('harga', true);
		$data['jumlah_komp']=(int)$this->input->post('jumlah_komp', true);
		$data['total_harga']=$data['harga']+$data['jumlah_komp'];
		$this->load->view('penjumlahan',$data);

		}	

		
		 function laptrx(){
        
			if ($this->session->userdata('login') == false){
        
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(45);
        $pdf->Cell(100,0,'Laporan Transaksi Penggantian Part',0,0,'C');
        $pdf->Ln(5);
        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(0,0,150);
        $pdf->SetTextColor(255);
        $pdf->SetDrawColor(0,200,0);
        $header = array('Id TRX ', 'Nama Teknisi', 'Nama Komponen', 'Harga', 'Jml Komponen', 'Total Harga','Tanggal',);
        // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
        $w = array(14, 40, 40, 20,25, 30, 25);
        for($i=0;$i<count($header);$i++)
        $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $pdf->Ln();
        // Data
        $fill = false;
        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(0);
        $pdf->SetFont('');
    foreach ($this->transaksi_m->tampilkan() as $row):
        $pdf->Cell($w[0],6,$row->Id_trx,'LR',0,'L',$fill); 
        $pdf->Cell($w[1],6,$row->teknisi,'LR',0,'L',$fill);
        $pdf->Cell($w[2],6,$row->nama_komponen,'LR',0,'L',$fill);
        $pdf->Cell($w[3],6,$row->harga,'LR',0,'L',$fill);
        $pdf->Cell($w[4],6,$row->jumlah_komp,'LR',0,'L',$fill);
        $pdf->Cell($w[5],6,$row->total_harga,'LR',0,'L',$fill);
        $pdf->Cell($w[6],6,$row->tgl_pengerjaan,'LR',0,'L',$fill);
        $pdf->Ln();
        $fill = !$fill;
    endforeach;
    $pdf->Cell(array_sum($w),0,'','T');
        
        $pdf->Output();
        
    } else { redirect('transaksi_c'); }

    }
		
	
}