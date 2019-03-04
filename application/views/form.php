<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


 <title>Aplikasi Keluhan LAB FTIK</title>
 <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css">
 <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
 <script src="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.js" type="text/javascript"></script>
</head>

<?php
 echo "<style>
	body{
		background-image:url(".base_url()."/img/uy.jpg);
		background-attachment:attachment;
		background-repeat:no-repeat;
		background-size:100% 100%;
	}
 </style>";
 ?>
<style type="text/css">
      .navbar-inverse{
		background-color:  #330066;
       }
    </style>
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
		  <li class="icon-switch2"><a href="<?php echo base_url(); ?>">Home</a></li>
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
 <!-- INI ADALAH TAMPILAN MENU UTAMA -->
    <div class="container">
     
        
		<div class="col-sm-11">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Silahkan Masukan Keluhan Anda</h3>
</div>
<div class="panel-body">
<form method="post" action="<?php echo base_url()?>index.php/keluhan/insert">
<div class="form-group">
<label>NIM</label>
<input type="text" class="form-control" placeholder="NIM" required="" name="NIM">
</div>
<div class="form-group">
<label>Nama Mahasiswa</label>
<input type="text" class="form-control" placeholder="Nama Mahasiswa" required="" name="nama">
</div>
<div class="form-group">
<label >Dosen Pengampu</label>
<input type="text" class="form-control" placeholder="Dosen Pengampu" required="" name="dosen_pengampu">
</div>
<div class="form-group">
<tr align='left'>
	<label>Ruangan </label>
	<td><select class="form-control" name="ruang">
		<option value="">Pilih Ruangan</option>
		<option value="Q.2.2">Q.2.2</option>
		<option value="Q.2.1">Q.2.1</option>
		<option value="Q.2.3">Q.2.3</option>
		<option value="M.2.2">M.2.2</option>
		<option value="M.2.1">M.2.1</option>
		<option value="M.2.3">M.2.3</option>
		<option value="E.2.2">E.2.2</option>
		<option value="E.2.1">E.2.1</option>
		<option value="E.2.3">E.2.3</option>
	      </select></td></tr>
</div>
<div class="form-group">
<tr align='left'>
	<label>Nomer Meja </label>
	<td><select class="form-control" name="nomer_meja">
		<option value=""> Pilih Meja </option>
		<option value="Meja 01">Meja 01</option>
		<option value="Meja 02">Meja 02</option>
		<option value="Meja 03">Meja 03</option>
		<option value="Meja 04">Meja 04</option>
		<option value="Meja 05">Meja 05</option>
		<option value="Meja 06">Meja 06</option>
		<option value="Meja 07">Meja 07</option>
		<option value="Meja 08">Meja 08</option>
		<option value="Meja 09">Meja 09</option>
		<option value="Meja 10">Meja 01</option>
		<option value="Meja 11">Meja 11</option>
		<option value="Meja 12">Meja 12</option>
		<option value="Meja 13">Meja 13</option>
		<option value="Meja 14">Meja 14</option>
		<option value="Meja 15">Meja 15</option>
		<option value="Meja 16">Meja 16</option>
		<option value="Meja 17">Meja 17</option>
		<option value="Meja 18">Meja 18</option>
	      </select></td></td>
</div>		  
<div class="form-group">
<label>Keluhan</label>
<textarea name="Keluhan" class="form-control"></textarea>
</div>
<hr>
<button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-save"></i>&nbsp; Kirim Keluhan</button>
</form>
</div>
</div>	
</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url() ?>/assets/bootsrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/creative.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>