<!DOCTYPE html>
<html>
<head>
	<title>Admin | Posyandu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url()?>assets/css/formDaftarIH.css" rel="stylesheet">
  <script type="text/javascript" src="assets/js/menu.js"></script>
  <script type="text/javascript" src="assets/js/scrolling_script.js"></script>
</head>

<body>

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
  <div class="col-h"></div>
    <div>
      <h3 class="col-h3">Form Pendaftaran Akun Ibu Hamil</h3>
    </div>
    <br>
    <div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 col-isi">
          <form action="<?php echo base_url('C_admibuhamil/tambahibuhamil') ?>" method="post">
            <!-- isi di sini -->
            <div class="form-group">
              <label for="formGroupExampleInput">ID Registrasi</label>
              <input type="text" class="form-control" name="id_registrasi" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Nama</label>
              <input type="text" class="form-control" name="nama" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Username</label>
              <input type="text" class="form-control" name="username" id="formGroupExampleInput">
            </div>
             <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" name="password" id="inputPassword">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <input class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></input>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">TTL</label>
              <input type="text" class="form-control" name="ttl" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Kehamilan Ke-</label>
              <input type="text" class="form-control" name="kehamilan_ke" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">No. Telepon</label>
              <input type="text" class="form-control" name="no_telp" id="formGroupExampleInput">
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
          </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
  </div>
</body>

</html>

