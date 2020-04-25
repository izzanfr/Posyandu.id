<!DOCTYPE html>
<html>
<head>
	<title>Petugas Kesehatan | Posyandu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

	<link href="assets/css/formCatatanKesehatan.css" rel="stylesheet">
</head>

<body>

  <!-- NAVBAR -->
  <?php include 'navbar-PK.php'; ?>

  <!-- AKHIR SEYENK -->

  <div class="container">
  <div class="col-h"></div>
    <div>
      <h3 class="col-h3">Edit Catatan Kesehatan</h3>
    </div>
    <br>
    <div>
    <div class="col-lg-1"></div>
    <div class="col-lg-5 col-isi">
	     <form action="<?php echo site_url('C_catatankesehatanpetugas/updateckesehatan')?>" method="post">
       <?php $no = 0;
            foreach ($pk as $pk) {?>
  	     <div class="form-group">
    	     <label>Tgl Pemeriksaan</label>
    	     <input type="date" id="datepicker" width="270" name="tanggal_pemeriksaan">
            <script>
              $('#datepicker').datepicker({
              uiLibrary: 'bootstrap'
              });
            </script>
  	     </div>
         <input type="hidden" name="id_catatan" value="<?php echo $pk['id_catatan'];?>">
  	     <div class="form-group">
    	     <label for="formGroupExampleInput">Nama Petugas Pemeriksa</label>
    	     <input type="text" class="form-control" name="nama_petugas" id="formGroupExampleInput" value="<?php echo $pk['nama_petugas'] ?>"readonly>
  	     </div>
  	     <div class="form-group">
    	     <label for="exampleFormControlInput1">Nama Ibu Hamil</label>
    	     <input type="text" class="form-control" name="nama_ibu" id="formGroupExampleInput" value="<?php echo $pk['nama_ibu'] ?>" readonly>
  	     </div>
         <!-- <div class="form-group">
            <label for="exampleFormControlInput1">ID registrasi</label>
            <input type="text" class="form-control" id="formGroupExampleInput" disabled>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">NIP</label>
            <input type="text" class="form-control" id="formGroupExampleInput" disabled>
          </div> -->
  	     <div class="form-group">
    	     <label for="exampleFormControlTextarea1">Keluhan Sekarang</label>
    	     <input class="form-control" name="keluhan" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pk['keluhan'] ?>"></input>
  	     </div>
  	     <div class="form-group">
    	     <label for="formGroupExampleInput">Berat Badan(Kg)</label>
    	     <input type="text" class="form-control" name="berat" id="formGroupExampleInput" value="<?php echo $pk['berat'] ?>">
  	     </div>
  	     <div class="form-group">
    	     <label for="formGroupExampleInput">Umur Kehamilan</label>
    	     <input type="text" class="form-control" name="umur" id="formGroupExampleInput" value="<?php echo $pk['umur'] ?>">
  	     </div>
  	     <div class="form-group">
    	     <label for="formGroupExampleInput">Tinggi Fundus(Cm)</label>
    	     <input type="text" class="form-control" name="tinggi" id="formGroupExampleInput" value="<?php echo $pk['tinggi'] ?>">
  	     </div>
         <div class="form-group">
           <label for="formGroupExampleInput">Letak Janin Kep/Su/Li</label>
           <input type="text" class="form-control" name="letak" id="formGroupExampleInput" value="<?php echo $pk['letak'] ?>">
         </div>
         <div class="form-group">
           <label for="formGroupExampleInput">Denyut Jantung Janin /Menit</label>
           <input type="text" class="form-control" name="denyut" id="formGroupExampleInput" value="<?php echo $pk['denyut'] ?>">
         </div>
         <div class="form-group">
           <label for="exampleFormControlSelect1">Kaki Bengkak</label>
           <select class="form-control" id="exampleFormControlSelect1" name="kaki" value="<?php echo $pk['kaki'] ?>">
            <option value="+">+</option>
            <option value="-">-</option>
           </select>
         </div>
         <div class="form-group">
            <label for="exampleFormControlTextarea1">Hasil Pemeriksaan Laboratorium</label>
            <input class="form-control" name="hasil" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pk['hasil'] ?>"></input>
         </div>
         <div class="form-group">
            <label for="exampleFormControlTextarea1">Nasihat Yang Disampaikan</label>
            <input class="form-control" name="nasihat" id="exampleFormControlTextarea1" rows="3" value="<?php echo $pk['nasihat'] ?>"></input>
         </div>
         <div class="form-group">
            <label for="formGroupExampleInput">Kapan Harus Kembali</label>
            <input type="text" class="form-control" name="kapan" id="formGroupExampleInput" value="<?php echo $pk['kapan'] ?>">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         <?php 
              } 
          ?>
	     </form>
      </div>
	  </div>
	<div class="col-lg-2"></div>
  </div>
</body>

</html>