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
 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/datatables/dataTables.min.css">
 
 
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
		  <li class="icon-switch1"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="icon-switch2"><a href="<?php echo base_url("index.php/keluhan/yes"); ?>">Buat Keluhan</a></li>
			<li class="icon-switch2"><a href="<?php echo base_url("index.php/status"); ?>">Lihat Status Keluhan</a></li>
			<li class="icon-switch2"><a href="<?php echo base_url("index.php/Login"); ?>">Login Teknisi</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Hubungi Kami</a></li>
            <li><a href="#">Tentang Kami</a></li>
          </ul>
        </div>
      </div>
    </nav>
		
		<div class="col-sm-12">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Daftar Status Keluhan</h3>
</div>
<div class="panel-body">
	<table id="table" class="table table-stiped table-bordered" cellspacing="0" width="100%">
	<thead>
	<tr>
		<th width ='10%'>NIM</th>
		<th width ='15%'>Nama Mahasiswa</th>
		<th width ='8%'>Ruang</th>
		<th width ='14%' >Nomer Meja</th>
		<th width ='15%' >Dosen Pengampu</th>
		<th width ='20%' >Keluhan</th>
		<th width ='20%' >Status</th>
		<th width ='10%' ></th>
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
	
</td>
</tr>
<?php
}
?>
</tbody>
</table>
			<script type ="text/javascript" src="<?php echo base_url() ?>Bootstrap/js/bootstrap.min.js"></script>
			<script type ="text/javascript" src="<?php echo base_url() ?>assets/datatables/datatables.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
   				 $('#datatables').DataTable();
				});
			</script>
			
</body>
</html>