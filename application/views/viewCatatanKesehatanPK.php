<!DOCTYPE html>
<html>
<head>
    <title>Petugas Kesehatan | Petugas Kesehatan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/viewCatatanKesehatanPK.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/menu.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
</head>
<body>
    <!-- NAVBAR -->
  <?php include 'navbar-PK.php'; ?>

  <!-- AKHIR SEYENK -->
    <div>
      <h3 class="col-h" style="text-align:center;">Catatan Kesehatan</h3>
    </div>
    <div>
    </div>
    <div class="col-lg-12">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
            <br>
            <br>
            <table class="table table-hover table-bordered">
            <thead>
            <tr bgcolor='#F5B7B1'>
                <th scope="col">No.</th>
                <th scope="col">Tgl Pemeriksaan</th>
                <th scope="col">Nama Ibu Hamil</th>
                <th scope="col">Keluhan Sekarang</th>
                <th scope="col">Berat Badan(Kg)</th>
                <th scope="col">Umur Kehamilan</th>
                <th scope="col">Tinggi Fundus(cm)</th>
                <th scope="col">Letak Janin Kep/Su/Li</th>
                <th scope="col">Denyut Jantung Janin /Menit</th>
                <th scope="col">Kaki Bengkak</th>
                <th scope="col">Hasil Pemeriksaan Laboratorium</th>
                <th scope="col">Nasihat Yang Disampaikan</th>
                <th scope="col">Kapan Harus Kembali</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $i=1;
                foreach ($profile_catatankesehatanpetugas as $pckp) {
            ?>
            <tr bgcolor="#F8F9F9">
                <th scope="row"><?php echo $i++?></th>
                <th scope="row"><?php echo $pckp['tanggal_pemeriksaan']?></th>
                <th scope="row"><?php echo $pckp['nama_petugas']?></th>
                <th scope="row"><?php echo $pckp['keluhan']?></th>
                <th scope="row"><?php echo $pckp['berat']?></th>
                <th scope="row"><?php echo $pckp['umur']?></th>
                <th scope="row"><?php echo $pckp['tinggi']?></th>
                <th scope="row"><?php echo $pckp['letak']?></th>
                <th scope="row"><?php echo $pckp['denyut']?></th>
                <th scope="row"><?php echo $pckp['kaki']?></th>
                <th scope="row"><?php echo $pckp['hasil']?></th>
                <th scope="row"><?php echo $pckp['nasihat']?></th>
                <th scope="row"><?php echo $pckp['kapan']?></th>
            </tr>
            <?php 
                } 
            ?>
            </tbody>
            </table>
    </div>
    </div>
</body>
</html>