<!DOCTYPE html>
<html>
 
    <!-- //$update = $this->M_ibuhamil->profile_ibuhamil($_SESSION['akun']);  -->

<head>
	<title>Ibu Hamil | Posyandu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!-- <link href="assets/css/formDaftarIH.css" rel="stylesheet"> -->
  <link href="<?php echo base_url()?>assets/css/profilIH.css" rel="stylesheet">
  <script type="text/javascript" src="assets/js/menu.js"></script>
</head>

<body>

  <!-- NAVBAR -->

	<!-- <?php include 'v_menu2.php'; ?> -->

  <!-- AKHIR SEYENK -->
  <div class="topnav" id="myTopnav">
        <img src="<?php echo base_url()?>assets/pictures/logonew6.png" class="img-logo">
        <a href="#home"><b>Log Out</a>
        <a href="#news">Akun Ibu Hamil</a>
        <a href="#contact">Akun Petugas Kesehatan</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
         </a>
    </div>

  <div class="container">
    <div>
      <h3 class="col-h3">Edit Profil Ibu Hamil</h3>
    </div>
    <br>
    <div>
        <div class="col-lg-1"></div>
      	<div class="col-lg-5 col-isi">
        	<form action="<?php echo site_url('C_admibuhamil/updateibuhamil')?>" method="post">
          	<div class="form-group">
            	<label for="id">ID Registrasi</label>
            	<input type="text" class="form-control" name="id_registrasi" id="id" value="<?= $profile_ibuhamil['id_registrasi']?>"disabled>
          	</div>
          	<div class="form-group">
            	<label for="nama">Nama</label>
            	<input type="text" class="form-control" name="nama" id="nama" value="<?= $profile_ibuhamil['nama']?>">
          	</div>
          	<div class="form-group">
            	<label for="username">Username</label>
            	<input type="text" class="form-control" name="username" id="username" value="<?= $profile_ibuhamil['username']?>" disabled>
          	</div>
          	<div class="form-group">
            	<label for="password">Password</label>
              	<input type="text" class="form-control" name="password" id="password" value="<?= $profile_ibuhamil['password']?>" disabled>
          	</div>
          	<div class="form-group">
            	<label for="alamat">Alamat</label>
            	<input class="form-control" name="alamat" id="alamat" rows="3" value="<?= $profile_ibuhamil['alamat']?>"></input>
          	</div>
          	<div class="form-group">
            	<label for="ttl">TTL</label>
            	<input type="text" class="form-control" name="ttl" id="ttl" value="<?= $profile_ibuhamil['ttl']?>">
          	</div>
          	<div class="form-group">
            	<label for="kehamilan_ke">Kehamilan Ke-</label>
            	<input type="text" class="form-control" name="kehamilan_ke" id="kehamilan_ke" value="<?= $profile_ibuhamil['kehamilan_ke']?>">
          	</div>
          	<div class="form-group">
            	<label for="no_telp">No. Telepon</label>
            	<input type="text" class="form-control" name="no_telp" id="no_telp" value="<?= $profile_ibuhamil['no_telp']?>">
          	</div>
            <button type="submit" class="btn btn-primary">Submit</button>
        	</form>
      	</div>
      	<div class="col-lg-4"></div>
    </div>
  </div>
</body>
</html>