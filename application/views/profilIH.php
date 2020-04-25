<!DOCTYPE html>
<html>
<?php 
    $data = $this->M_profile_ih->getProfile($_SESSION['username']); 
?>
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

	<?php include 'v_menu2.php'; ?>

  <!-- AKHIR SEYENK -->

  <div class="container">
    <div>
      <h3 class="col-h3">Profil Ibu Hamil</h3>
    </div>
    <br>
    <div>
        <div class="col-lg-1"></div>
      	<div class="col-lg-5 col-isi">
        	<form action="<?php echo site_url('C_profile_ih/edit')?>" method ='post'>
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
          	<div class="form-group">
            	<label for="formGroupExampleInput">ID Registrasi</label>
            	<input type="text" class="form-control" id="formGroupExampleInput" name ="id" value="<?= $data['id_registrasi']?>" disabled>
          	</div>
          	<div class="form-group">
            	<label for="formGroupExampleInput">Nama</label>
            	<input type="text" class="form-control" id="formGroupExampleInput" name ="nama" value="<?= $data['nama']?>">
          	</div>
          	<div class="form-group">
            	<label for="exampleFormControlInput1">Username</label>
            	<input type="text" class="form-control" id="formGroupExampleInput" name ="username" value="<?= $data['username']?>"disabled>
          	</div>
          	<div class="form-group">
            	<label for="inputPassword">Password</label>
              	<input type="text" class="form-control" id="inputPassword" name ="password" value="<?= $data['password']?>"disabled>
          	</div>
          	<div class="form-group">
            	<label for="exampleFormControlTextarea1">Alamat</label>
            	<input class="form-control" id="exampleFormControlTextarea1" name ="alamat" rows="3" value="<?= $data['alamat']?>"></input>
          	</div>
          	<div class="form-group">
            	<label for="formGroupExampleInput">TTL</label>
            	<input type="text" class="form-control" id="formGroupExampleInput" name ="ttl" value="<?= $data['ttl']?>">
          	</div>
          	<div class="form-group">
            	<label for="formGroupExampleInput">Kehamilan Ke-</label>
            	<input type="text" class="form-control" id="formGroupExampleInput" name ="kehamilan_ke" value="<?= $data['kehamilan_ke']?>">
          	</div>
          	<div class="form-group">
            	<label for="formGroupExampleInput">No. Telepon</label>
            	<input type="text" class="form-control" id="formGroupExampleInput" name ="no_telp" value="<?= $data['no_telp']?>">
          	</div>
            <button type="submit" class="btn btn-primary">Edit</button>
        	</form>
      	</div>
      	<div class="col-lg-4"></div>
    </div>
  </div>
</body>
</html>