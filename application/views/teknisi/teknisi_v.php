<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	
 <title>Daftar Status Keluhan</title>
 <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/union/css/bootstrap.css" type="text/css">
 <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/union/css/bootstrap.min.css" type="text/css">
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
	<script type="text/javascript" src="assets/union/js/jquery.js"></script>
	<script type="text/javascript" src="assets/union/js/bootstrap.js"></script>
 <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
 
 <style type="text/css">
      .navbar-inverse{
		background-color:  #330066;
       }
    </style>
	<?php
 echo "<style>
	body{
		background-image:url(".base_url()."/img/uy.jpg);
		background-attachment:fixed;
		background-repeat:no-repeat;
		background-size:100% 100%;
	}
 </style>";
 ?>
</head>
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
            <li class="icon-switch2"><a href="<?php echo base_url("index.php/transaksi_c"); ?>">Transaksi Sparepart</a></li>
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
	<div class="col-sm-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Daftar Status Keluhan</h3>
</div>
<div class="panel-body">
	<table class="table table-bordered" width="100%">
	<thead>
	<tr>
		<th width ='10%'>NIM</th>
		<th width ='15%'>Nama Mahasiswa</th>
		<th width ='8%'>Ruang</th>
		<th width ='14%' >Nomer Meja</th>
		<th width ='15%' >Dosen Pengampu</th>
		<th width ='20%' >Keluhan</th>
		<th width ='15%' >Status</th>
		<th width ='15%' >Update</th>
	</tr>
</thead>

<tbody>
<?php
foreach ($result as $value) {
?>
<tr>
	<td><?php echo $value['NIM'] ;?></td>
	<td><?php echo $value['nama'] ;?></td>
	<td><?php echo $value['ruang'] ;?></td>
	<td><?php echo $value['nomer_meja'] ;?></td>
	<td><?php echo $value['dosen_pengampu'] ;?></td>
	<td><?php echo $value['Keluhan'] ;?></td>
	<td><?php echo $value['status'] ;?></td>
	<td style="text-align: center">
	<a href="<?php echo base_url()?>index.php/teknisi_c/edit_view/<?php echo $value['NIM'];?>">
	<button class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit "></i></button>
	</a>
	<a href="<?php echo base_url()?>index.php/teknisi_c/delete/<?php echo $value['NIM'];?>">
	<button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash "></i></button>
	</a>
</td>
</tr>
<?php
}
?>
</tbody>


	



</body>
</html>