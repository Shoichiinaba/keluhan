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
 <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.css" type="text/css">
 <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
 <script src="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.js" type="text/javascript"></script>
 <?php
 echo "<style>
	body{
		background-image:url(".base_url()."/img/sio.jpg);
		background-attachment:fixed;
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

</head>
<body>
<!-- INI ADALAH HEADER -->
  <!-- <nav class="navbar navbar-inverse navbar-static-top" id="mainNav">-->
   <nav class="navbar navbar-inverse navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">FTIK USM</a>
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
 <br><br><br>
 
 <!-- INI ADALAH TAMPILAN MENU UTAMA -->
    <br><br><br><br>
	<div class="container">
      <div class="jumbotron">
        <center><h2>Selamat Datang Di FTIK</h2></center><br>
        <p>Aplikasi ini di buat untuk menjawab keluh kesah mahasiswa yang sangat lambat perbaikannya jika ada komputer yang bermasalah di laboratorium FTIK.</p>
        <br><p>
          <a class="btn btn-lg btn-primary" href="http://ftik.usm.ac.id" role="button">Lihat Website &raquo;</a>
        </p>
      </div>

    </div>
</body>
</html>