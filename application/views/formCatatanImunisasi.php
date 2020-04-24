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
      <h3 class="catatan col-h3">Form Catatan Imunisasi</h3>
    </div>
    <br>
    <div>
    <div class="col-lg-1"></div>
    <div class="col-lg-5 col-isi">
	     <form>
          <div class="form-group">
            <label>Tgl Pemeriksaan</label>
            <input type="date" id="datepicker" width="270" />
              <script>
                $('#datepicker').datepicker({
                uiLibrary: 'bootstrap'
                });
              </script>
          </div>
  	      <div class="form-group">
    	      <label for="formGroupExampleInput">Nama Petugas Pemeriksa</label>
    	      <input type="text" class="form-control" id="formGroupExampleInput">
  	      </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">ID registrasi</label>
            <input type="text" class="form-control" id="formGroupExampleInput">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">NIP</label>
            <input type="text" class="form-control" id="formGroupExampleInput">
          </div>
  	      <div class="form-group">
    	      <label for="exampleFormControlInput1">Nama Ibu</label>
    	      <input type="text" class="form-control" id="formGroupExampleInput">
  	      </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Umur Anak</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>0 Bulan</option>
              <option>1 Bulan</option>
              <option>2 Bulan</option>
              <option>3 Bulan</option>
              <option>4 Bulan</option>
              <option>5 Bulan</option>
              <option>6 Bulan</option>
              <option>7 Bulan</option>
              <option>8 Bulan</option>
              <option>9 Bulan</option>
              <option>10 Bulan</option>
              <option>11 Bulan</option>
              <option>12+ Bulan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Vaksin Yang Diberikan</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>HB-0</option>
              <option>BCG</option>
              <option>Polio</option>
              <option>DPT-HB-Hib 1</option>
              <option>Polio 2</option>
              <option>DPT-HB-Hib 2</option>
              <option>Polio 3</option>
              <option>DPT-HB-Hib 3</option>
              <option>Polio 4</option>
              <option>IPV</option>
              <option>Campak</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
	      </form>
	    </div>
	    <div class="col-lg-2"></div>
	    </div>
      </div>
</body>
</html>