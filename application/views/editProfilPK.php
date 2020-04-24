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
  <link href="assets/css/navbar_menu.css" rel="stylesheet">
  <script type="text/javascript" src="assets/js/menu.js"></script>
</head>

<body>
  <!-- NAVBAR -->
  <?php include 'navbar-PK.php'; ?>

  <!-- AKHIR SEYENK -->

  <div class="container">
    <div class="col-h"></div>
    <div>
      <h3 class="col-h3">Edit Profil Petugas Kesehatan</h3>
    </div>
    <div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 col-isi">
          <form>
            <div class="form-group">
              <label for="formGroupExampleInput">NIP</label>
              <input type="text" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Nama</label>
              <input type="text" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Username</label>
              <input type="text" class="form-control" id="formGroupExampleInput">
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-check">
              <label for="exampleRadios1">Jenis Kelamin</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1">
              <label class="form-check-label" for="exampleRadios1">Laki-laki</label>
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
              <label class="form-check-label" for="exampleRadios2">Perempuan</label>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">No. Telepon</label>
              <input type="text" class="form-control" id="formGroupExampleInput">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
  </div>
</body>

</html>