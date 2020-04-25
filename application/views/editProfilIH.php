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
        <a href="<?= base_url() ?>C_logout/logout"><b>Log Out</a>
        <a href="<?php echo base_url('C_admibuhamil')?>">Akun Ibu Hamil</a>
        <a href="<?php echo base_url('C_admpetugaskesehatan')?>">Akun Petugas Kesehatan</a>
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
			<?php $no = 1;
                foreach ($ph as $ph) {?>
          	<div class="form-group">
            	<label for="id">ID Registrasi</label>
            	<input type="text" class="form-control" name="id_registrasi" id="id" value="<?php echo $ph['id_registrasi'] ?>"readonly>
          	</div>
          	<div class="form-group">
            	<label for="nama">Nama</label>
            	<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $ph['nama'] ?>">
          	</div>
          	<div class="form-group">
            	<label for="username">Username</label>
            	<input type="text" class="form-control" name="username" id="username" value="<?php echo $ph['username'] ?>" readonly>
          	</div>
          	<div class="form-group">
            	<label for="password">Password</label>
              	<input type="text" class="form-control" name="password" id="password" value="<?php echo $ph['password'] ?>" readonly>
          	</div>
          	<div class="form-group">
            	<label for="alamat">Alamat</label>
            	<input class="form-control" name="alamat" id="alamat" rows="3" value="<?php echo $ph['alamat'] ?>"></input>
          	</div>
          	<div class="form-group">
            	<label for="ttl">TTL</label>
            	<input type="text" class="form-control" name="ttl" id="ttl" value="<?php echo $ph['ttl'] ?>">
          	</div>
          	<div class="form-group">
            	<label for="kehamilan_ke">Kehamilan Ke-</label>
            	<input type="text" class="form-control" name="kehamilan_ke" id="kehamilan_ke" value="<?php echo $ph['kehamilan_ke'] ?>">
          	</div>
          	<div class="form-group">
            	<label for="no_telp">No. Telepon</label>
            	<input type="text" class="form-control" name="no_telp" id="no_telp" value="<?php echo $ph['no_telp'] ?>">
          	</div>
            <button type="submit" class="btn btn-primary">Submit</button>
			<?php }?>
        	</form>
      	</div>
      	<div class="col-lg-4"></div>
    </div>
  </div>
</body>
</html>