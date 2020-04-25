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

  <link href="<?php echo base_url()?>assets/css/formCatatanPemenuhanGizi.css" rel="stylesheet">
</head>

<body>
  <!-- NAVBAR -->
  <?php include 'navbar-PK.php'; ?>

  <!-- AKHIR SEYENK -->

  <div class="container">
  <div class="col-h"></div>
  <div>
    <h3 class="col-h3">Form Pemenuhan Gizi</h3>
  </div>
  <br>
  <div>
  <div class="col-lg-1"></div>
  <div class="col-lg-5 col-isi">
    <form action="<?php echo base_url('C_inputpemenuhangizi/tambahpemenuhangizi') ?>" method="post">
      <div class="form-group">
        <label>Tgl Pemeriksaan</label>
        <input type="date" id="datepicker" width="270" name="tanggal"/>
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
        <label for="exampleFormControlInput1">Nama Ibu</label>
        <input type="text" class="form-control" name="nama_ibu" id="formGroupExampleInput">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Umur Anak</label>
          <select class="form-control" name="umur" id="exampleFormControlSelect1">
            <option value="6-11 Bulan">6-11 Bulan</option>
            <option value="1-2 Tahun">1-2 Tahun</option>
            <option value="2-3 Tahun">2-3 Tahun</option>
            <option value="3-4 Tahun">3-4 Tahun</option>
            <option value="4-5 Tahun">4-5 Tahun</option>
          </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Vitamin Yang Diberikan</label>
        <input type="text" class="form-control" name="vitamin" id="formGroupExampleInput">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Nasihat Pemenuhan Gizi Oleh Tenaga Kesehatan</label>
        <textarea class="form-control" name="nasihat" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  </div>
  <div class="col-lg-2"></div>
  </div>
</div>
</body>

</html>