<!DOCTYPE html>
<html>
<?php 
    $data = $this->M_profile_petugaskes->getProfile($_SESSION['username']); 
?>
<head>
  <title>Petugas Kesehatan | Posyandu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- <link href="assets/css/formDaftarIH.css" rel="stylesheet"> -->
  <link href="<?php echo base_url()?>assets/css/navbar_menu.css" rel="stylesheet">
  <script type="text/javascript" src="assets/js/menu.js"></script>
</head>

<body>
  <!-- NAVBAR -->
  <?php include 'navbar-PK.php'; ?>

  <!-- AKHIR SEYENK -->

  <div class="container">
    <div class="col-h"></div>
    <div>
      <h3 class="col-h3">Profil Petugas Kesehatan</h3>
    </div>
    <div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 col-isi">
          <form action="<?php site_url('C_profile_petugaskes')?>" method = 'post'>
            <?php if(isset($error_message)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error_message ?>
                        </div>
            <?php } ?>
            <?php if(isset($success)) { ?>
                        <div class="alert alert-success" role="alert">
                            <?= $success ?>
                        </div>
            <?php } ?>
            <input type="hidden" name="username" value="<?php echo $pki['username'];?>">
            <div class="form-group">
              <label for="formGroupExampleInput">NIP</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name ="nip" value ="<?= $data['nip']?>" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Nama</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name ="nama" value ="<?= $data['nama']?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Username</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name ="username" value ="<?= $data['username']?>" readonly>
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
                <input type="text" class="form-control" id="inputPassword" name ="password" value ="<?= $data['password']?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <input class="form-control" id="exampleFormControlTextarea1" rows="3" name ="alamat" value ="<?= $data['alamat']?>" readonly></input>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Jenis Kelamin</label>
              <input class="form-control" id="exampleFormControlTextarea1" rows="3" name ="jenis_kelamin" value ="<?= $data['jenis_kelamin']?>" readonly></input>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">No. Telepon</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name ="no_telp" value="<?= $data['no_telp']?>" readonly>
            </div>
          </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
  </div>
</body>

</html>