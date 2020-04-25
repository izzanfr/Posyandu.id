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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link href="assets/css/formCatatanImunisasi.css" rel="stylesheet">
</head>

<body>
 
  <!-- NAVBAR -->
  <?php include 'navbar-PK.php'; ?>

  <!-- AKHIR SEYENK -->

  <div class="container">
  <div class="col-h"></div>
    <div>
      <h3 class="catatan col-h3">Edit Catatan Imunisasi</h3>
    </div>
    <br>
    <div>
    <div class="col-lg-1"></div>
    <div class="col-lg-5 col-isi">
	     <form  action="<?php echo base_url('C_catatanimunisasipetugas/updateimunisasi')?>" method="post">
       <?php $no = 0;
            foreach ($pi as $pi) {?>
          <div class="form-group">
            <label>Tgl Pemeriksaan</label>
            <input type="date" id="datepicker" width="270" name="tanggal" />
              <script>
                $('#datepicker').datepicker({
                uiLibrary: 'bootstrap'
                });
              </script>
          </div>
  	      <div class="form-group">
    	      <label for="formGroupExampleInput">Nama Petugas Pemeriksa</label>
    	      <input type="text" class="form-control" name="nama_petugas" id="formGroupExampleInput" value="<?php echo $pi['nama_petugas'] ?>" readonly>
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
    	      <label for="exampleFormControlInput1">Nama Ibu</label>
    	      <input type="text" class="form-control" name="nama_ibu" id="formGroupExampleInput" value="<?php echo $pi['nama_ibu'] ?>" readonly>
  	      </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Umur Anak</label>
            <select class="form-control" id="exampleFormControlSelect1" name="umur">
              <option value="0 Bulan">0 Bulan</option>
              <option value="1 Bulan">1 Bulan</option>
              <option value="2 Bulan">2 Bulan</option>
              <option value="3 Bulan">3 Bulan</option>
              <option value="4 Bulan">4 Bulan</option>
              <option value="5 Bulan">5 Bulan</option>
              <option value="6 Bulan">6 Bulan</option>
              <option value="7 Bulan">7 Bulan</option>
              <option value="8 Bulan">8 Bulan</option>
              <option value="9 Bulan">9 Bulan</option>
              <option value="10 Bulan">10 Bulan</option>
              <option value="11 Bulan">11 Bulan</option>
              <option value="12+ Bulan">12+ Bulan</option>
            </select>
          </div>
          <input type="hidden" name="id_catatan" value="<?php echo $pi['id_catatan'];?>">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Vaksin Yang Diberikan</label>
            <select class="form-control" id="exampleFormControlSelect1" name="vaksin">
              <option value="HB-0">HB-0</option>
              <option value="BCG">BCG</option>
              <option value="Polio">Polio</option>
              <option value="DPT-HB-Hib 1">DPT-HB-Hib 1</option>
              <option value="Polio 2">Polio 2</option>
              <option value="DPT-HB-Hib">DPT-HB-Hib 2</option>
              <option value="Polio 3">Polio 3</option>
              <option value="DPT-HB-Hib 3">DPT-HB-Hib 3</option>
              <option value="Polio 4">Polio 4</option>
              <option value="IPV">IPV</option>
              <option value="Campak">Campak</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <?php 
              } 
          ?>
	      </form>
	    </div>
	    <div class="col-lg-2"></div>
	    </div>
      </div>
</body>
</html>