<!DOCTYPE html>
<html>
<head>
	<title>Home | Posyandu</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link href="<?php echo base_url()?>assets/css/navbar_style.css" rel="stylesheet">
</head>
<body>
	<!-- Navbar -->
	<div class="container container-fluid margin-0">
		<!-- Logo -->
		<nav class="navbar navbar-expand-lg navbar-dark bgcolor navbar-static-top navbar-fixed-top">
			<div class="col-12">
				<div class="col-md-11">
					<a href=""><img src="<?php echo base_url()?>assets/pictures/logonavbarr.png" alt=""></a>
				</div>
				<div class="col-md-1">
					<a class="btn login" href="<?php echo site_url('C_userlogin')?>">Login</a>
					<!-- <button class="btn-login">Login</button> -->
				</div>
			</div>
		</nav>
		<div class="row bg">
			<img src="<?php echo base_url()?>assets/pictures/home.png">
		</div>
		<div class="row row-text">
			<div class="col-lg-5 padding-1">
				<h3><b>POSYANDU</b></h3>
				<p>Posyandu merupakan salah satu bentuk Upaya Kesehatan Berbasis Masyarakat (UKBM) yang dikelola dan diselenggarakan dari, oleh, untuk dan bersama masyarakat dalam penyelenggaraan pembangunan.</p>
			</div>
			<div class="col-lg-4 padding-2">
				<h3><b>ABOUT US</b></h3>
				<p><img src="<?php echo base_url()?>assets/pictures/email.png" class="logo-sm">customer-service@posyandu.id</p>
				<p><img src="<?php echo base_url()?>assets/pictures/phone.png" class="logo-sm">031-9919919</p>
				<p><img src="<?php echo base_url()?>assets/pictures/date.png" class="logo-sm">Senin-Sabtu, 07.30 WIB s/d 14.00 WIB</p>
			</div>
			<div class="col-lg-3 padding-3">
				<h3><b>ALAMAT</b></h3>
				<p>Jl. Telekomunikasi, Jl. Terusan Buah Batu Jl. Sukabirus No.1, Sukapura, Kec. Dayeuhkolot, Bandung, Jawa Barat 40257</p>
			</div>
		</div>
	</div>
</body>
</html>