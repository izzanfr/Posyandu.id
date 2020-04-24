<!DOCTYPE html>
<html>
<head>
    <title>Admin | Posyandu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/admin.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/menu.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
</head>
<body>

  <!-- NAVBAR -->
    <div class="topnav" id="myTopnav">
        <img src="<?php echo base_url()?>assets/pictures/logonew6.png" class="img-logo">
        <a href="<?= base_url() ?>C_logout/logout"><b>Log Out</a>
        <a href="<?php echo base_url('C_admibuhamil')?>">Akun Ibu Hamil</a>
        <a href="<?php echo base_url('C_admpetugaskesehatan')?>">Akun Petugas Kesehatan</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
         </a>
    </div>
  <!-- AKHIR -->

    <!-- SELAMAT DATANG -->
  <nav class="navbar">
      <div class="collapse navbar-collapse">
          <span class="col text-center text-light">
              <img class="bg-admin" src="<?php echo base_url()?>assets/pictures/admin.png">
          </span>
        </div>
      </div>
  </nav>
</body>
</html>