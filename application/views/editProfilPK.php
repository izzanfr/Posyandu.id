<!DOCTYPE html>
<html>
<head>
  <title>Petugas Kesehatan | Posyandu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- <link href="assets/css/formDaftarIH.css" rel="stylesheet"> -->
  <!-- <link href="<?php echo base_url()?>assets/css/navbar_menu.css" rel="stylesheet"> -->
  <link href="<?php echo base_url()?>assets/css/profilPK.css" rel="stylesheet">
  <script type="text/javascript" src="assets/js/menu.js"></script>
</head>

<body>
  <!-- NAVBAR -->
  <!-- <?php include 'navbar-PK.php'; ?> -->

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
    <div class="col-h"></div>
    <div>
      <h3 class="col-h3">Edit Profil Petugas Kesehatan</h3>
    </div>
    <div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 col-isi">
          <form action="<?php echo site_url('C_admpetugaskesehatan/updatepkesehatan')?>" method="post">
          <?php $no = 1;
                foreach ($pk as $pk) {?>
            <div class="form-group">
              <label for="formGroupExampleInput">NIP</label>
              <input type="text" class="form-control" name="nip" id="formGroupExampleInput" value="<?php echo $pk['nip'] ?>" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Nama</label>
              <input type="text" class="form-control" name="nama" id="formGroupExampleInput" value="<?php echo $pk['nama'] ?>">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Username</label>
              <input type="text" class="form-control" name="username" id="formGroupExampleInput" value="<?php echo $pk['username'] ?>" readonly>
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword" value="<?php echo $pk['password'] ?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <input class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pk['alamat'] ?>"></input>
            </div>
            <div class="form-check">
              <label for="exampleRadios1">Jenis Kelamin</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="Laki-Laki">
              <label class="form-check-label" for="exampleRadios1">Laki-laki</label>
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios3" value="Perempuan">
              <label class="form-check-label" for="exampleRadios2">Perempuan</label>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">No. Telepon</label>
              <input type="text" class="form-control" name="no_telp" id="formGroupExampleInput" value="<?php echo $pk['no_telp'] ?>">
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