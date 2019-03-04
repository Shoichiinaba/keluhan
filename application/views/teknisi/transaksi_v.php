<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	
 <title>Daftar Laporan Pergantian Part</title>
   <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css">
 <style>
	#mainNav .container  ul.top-secret{
		float:right;
		list-style:none;
		margin-top:16px;
	}
	#mainNav .container  ul.top-secret li{
		float:left;
		margin-right:12px;
	}
	#mainNav .container  ul.top-secret li a{
		margin-top:45px;
	}
 </style>
 <style type="text/css">
      .navbar-inverse{
		background-color:  #330066;
       }
    </style>
</head>
<?php
 echo "<style>
	body{
		background-image:url(".base_url()."/img/Li.jpg);
		background-attachment:fixed;
		background-repeat:no-repeat;
		background-size:100% 100%;
	}
 </style>";
 ?>
<body >

<!-- INI ADALAH HEADER -->
   <nav class="navbar navbar-inverse navbar-static-top" id="mainNav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">FTIK USM</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="icon-switch2"><a href="<?php echo base_url("index.php/teknisi_c"); ?>">Home Teknisi</a></li>
			<DIV STYLE="clear:both;"></DIV>
          </ul>
				<ul class="top-secret" style="">
					<li><a href="<?php echo site_url('Welcome/logout'); ?>" onclick="return confirm('Apakah Anda Yakin Ingin Keluar');"><i class="icon-switch2"></i> Logout</a></li>
					<li><a href="#">Tentang Kami</a></li>
				</ul>
				<DIV STYLE="clear:both;"></DIV>
        </div>
      </div>
    </nav>
		<div class="container " role="main">
		<div class="row" style="margin-bottom: 8px;">
		<div class="col-sm-8">
		<a href="<?php echo base_url()?>index.php/transaksi_c/add" ><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-plus-sign "></i>&nbsp; Buat Laporan TRX</button></a><br>
		</div>
</div>
<div class="row">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Laporan Transaksi Penggantian Part</h3>
</div>
<div class="panel-body">
	<table class="table table-bordered" width="100%">
	<thead>
	<tr>
		<th width ='8%'>Id TRX</th>
		<th width ='15%'>Nama Teknisi</th>
		<th width ='18%'>Nama Komponen</th>
		<th width ='14%'>Harga</th>
		<th width ='16%'>Jumlah Komponen</th>
		<th width ='13%'>Total Harga</th>
		<th width ='19%'>Tanggal Pengerjaan</th>
		<th width ='10%'>Update</th>
	</tr>
</thead>

<tbody>
<?php
foreach ($result as $value) {
?>
<tr>
		<td><?php echo $value['Id_trx'] ;?></td>
		<td><?php echo $value['nama_teknisi'] ;?></td>
		<td><?php echo $value['nama_komponen'] ;?></td>
		<td><?php echo $value['harga'] ;?></td>
		<td><?php echo $value['jumlah_komp'] ;?></td>
		<td><?php echo $value['total_harga'] ;?></td>
		<td><?php echo $value['tgl_pengerjaan'] ;?></td>
		<td style="text-align: center">
<a href="<?php echo base_url()?>index.php/transaksi_c/edit_view/<?php echo $value['Id_trx'];?>">
<button class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit "></i></button>
</a>
<a href="<?php echo base_url()?>index.php/transaksi_c/delete/<?php echo $value['Id_trx'];?>">
<button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash "></i></button>
</a>
</td>
</tr>
<?php
}
?>
</tbody>
	<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
<div class="container " role="main">
<div class="row" style="margin-bottom: 10px;">
<a href="<?php echo base_url()?>index.php/transaksi_c/laptrx" ><button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak</button>
</div>
</div>
<div class="row">
    <div class="container">
</html>