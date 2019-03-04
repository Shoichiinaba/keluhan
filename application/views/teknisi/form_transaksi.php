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
 <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/union/css/style.css" type="text/css">
 <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/union/css/bootstrap.min.css" type="text/css">
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
 
 	<style type="text/css">
      .navbar-inverse{
		background-color:  #330066;
       }
    </style>
	<script type="text/javascript" src="assets/union/js/jquery.js"></script>
	<script type="text/javascript" src="assets/union/js/bootstrap.js"></script>
 <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<?php
 echo "<style>
	body{
		background-image:url(".base_url()."/img/Li.jpg);
		background-attachment:attachment;
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
 <!-- INI ADALAH TAMPILAN MENU UTAMA -->
 <div class="container " role="main">
<div class="row" style="margin-bottom: 10px;">
<div class="col-sm-5">
<a href="<?php echo base_url("index.php/transaksi_c")?>"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-arrow-left "></i>&nbsp; Beck</button></a>
</div>
</div>
<div class="row">
    <div class="container">
        
		<div class="col-sm-13">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title">Transaksi Penggantian Part </h3>
</div>
<div class="panel-body">
<form method="post" action="<?php echo base_url();?>index.php/transaksi_c/insert">
<!--<div class="form-group">
<label>ID Transaksi</label>
/<input type="text" class="form-control" placeholder="Id Transaksi" required="" name="Id_trx">
</div>-->
<div class="form-group">
    <label>Nama Teknisi</label>
        <select name="teknisi" class="form-control">
        <option value=0>Pilih Teknisi</option>
        <?php foreach ($teknisi as  $value) {
        echo "<option value='$value[id_teknisi]'>$value[nama_teknisi]</option>";
        }
        ?>
        </select>

</div>
<div class="form-group">
<label>Nama_Komponen</label>
<input type="text" class="form-control" placeholder="Nama Komponen" required="" name="nama_komponen">
</div>
<div class="form-group">
<label>Jumlah Komponen</label>
<input type="text" class="form-control" placeholder="Jumlah Komponen" required="" name="jumlah_komp">
</div>
<div class="form-group">
<label> Harga</label>
<input type="text" class="form-control" placeholder="Harga" required="" name="harga">
</div>
<div class="form-group">
<label>Tanggal Pengerjaan</label>
<input type="text" class="form-control" placeholder="Tanggal Pengerjaan" required="" name="tgl_pengerjaan">
</div>
<hr>
<button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-pencil"></i>&nbsp; Buat Transaksi</button>
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