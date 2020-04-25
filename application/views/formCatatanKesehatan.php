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

	<link href="<?php echo base_url()?>assets/css/formCatatanKesehatan.css" rel="stylesheet">
</head>

<body>

  <!-- NAVBAR -->
  <?php include 'navbar-PK.php'; ?>

  <!-- AKHIR SEYENK -->

  <div class="container">
  <div class="col-h"></div>
    <div>
      <h3 class="col-h3">Form Catatan Kesehatan</h3>
    </div>
    <br>
    <div>
    <div class="col-lg-1"></div>
    <div class="col-lg-5 col-isi">
	     <form action="<?php echo base_url('C_inputkesehatan/tambahkesehatan') ?>" method="post">
  	     <div class="form-group">
    	     <label>Tgl Pemeriksaan</label>
    	     <input type="date" id="datepicker" width="270" name="tanggal_pemeriksaan">
            <script>
              $('#datepicker').datepicker({
              uiLibrary: 'bootstrap'
              });
            </script>
  	     </div>
         <div class="form-group">
           <label for="formGroupExampleInput">Username</label>
           <input type="text" class="form-control" name="username" id="formGroupExampleInput">
         </div>
  	     <div class="form-group">
    	     <label for="formGroupExampleInput">Nama Petugas Pemeriksa</label>
    	     <input type="text" class="form-control" name="nama_petugas" id="formGroupExampleInput">
  	     </div>
  	     <div class="form-group">
    	     <label for="exampleFormControlInput1">Nama Ibu Hamil</label>
    	     <input type="text" class="form-control" name="nama_ibu" id="formGroupExampleInput">
  	     </div>
  	     <div class="form-group">
    	     <label for="exampleFormControlinput1">Keluhan Sekarang</label>
    	     <input class="form-control" name="keluhan" id="exampleFormControlinput1" rows="3"></input>
  	     </div>
  	     <div class="form-group">
    	     <label for="formGroupExampleInput">Berat Badan(Kg)</label>
    	     <input type="text" class="form-control" name="berat" id="formGroupExampleInput">
  	     </div>
  	     <div class="form-group">
    	     <label for="formGroupExampleInput">Umur Kehamilan</label>
    	     <input type="text" class="form-control" name="umur" id="formGroupExampleInput">
  	     </div>
  	     <div class="form-group">
    	     <label for="formGroupExampleInput">Tinggi Fundus(Cm)</label>
    	     <input type="text" class="form-control" name="tinggi" id="formGroupExampleInput">
  	     </div>
         <div class="form-group">
           <label for="formGroupExampleInput">Letak Janin Kep/Su/Li</label>
           <input type="text" class="form-control" name="letak" id="formGroupExampleInput">
         </div>
         <div class="form-group">
           <label for="formGroupExampleInput">Denyut Jantung Janin /Menit</label>
           <input type="text" class="form-control" name="denyut" id="formGroupExampleInput">
         </div>
         <div class="form-group">
           <label for="exampleFormControlSelect1">Kaki Bengkak</label>
           <select class="form-control" name="kaki" id="exampleFormControlSelect1">
            <option value="+">+</option>
            <option value="-">-</option>
           </select>
         </div>
         <div class="form-group">
            <label for="exampleFormControlinput1">Hasil Pemeriksaan Laboratorium</label>
            <input class="form-control" name="hasil" id="exampleFormControlinput1" rows="3"></input>
         </div>
         <div class="form-group">
            <label for="exampleFormControlinput1">Nasihat Yang Disampaikan</label>
            <input class="form-control" name="nasihat" id="exampleFormControlinput1" rows="3"></input>
         </div>
         <div class="form-group">
            <label for="formGroupExampleInput">Kapan Harus Kembali</label>
            <input type="text" class="form-control" name="kapan" id="formGroupExampleInput">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
	     </form>
      </div>
	  </div>
	<div class="col-lg-2"></div>
  </div>
</body>

</html>