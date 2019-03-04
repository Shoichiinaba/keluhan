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
 <script src="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.js" type="text/javascript"></script>
</head>
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
		  <li c<ul class="nav navbar-nav">
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
 <br><br><br><br><br>
 
 
 <!-- INI ADALAH TAMPILAN MENU UTAMA -->
    <div class="container">
      <div class="jumbotron">
        <center><h2>Keluhan Sudah terkirim</h2></center><br>
       
        
      </div>

    </div>
</body>
</html>