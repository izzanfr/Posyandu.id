<!DOCTYPE html>
<html>
<head>
    <title>Admin | Petugas Kesehatan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/viewCatatanImunisasiPK.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/menu.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
</head>
<body>
   <!-- NAVBAR -->
  <?php include 'navbar-PK.php'; ?>

  <!-- AKHIR SEYENK -->
    <div>
      <h3 class="col-h" style="text-align:center;">Catatan Imunisasi</h3>
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
                <th scope="col">Nama Ibu</th>
                <th scope="col">Umur Anak</th>
                <th scope="col">Jenis Vaksin Yang Diberikan</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $i=1;
                foreach ($profile_catatanimunisasipetugas as $pcip) {
            ?>
            <tr bgcolor="#F8F9F9">
                <th scope="row"><?php echo $i++?></th>
                <th scope="row"><?php echo $pcip['tanggal']?></th>
                <th scope="row"><?php echo $pcip['nama_petugas']?></th>
                <th scope="row"><?php echo $pcip['umur']?></th>
                <th scope="row"><?php echo $pcip['vaksin']?></th>
                <th>
                    <button class="btn btn-warning">Edit</button>
                    <a class="btn btn-danger" href="<?php echo site_url('C_inputimunisasi/deleteimunisasi').$pcip['username'];?>" onclick="return confirm('Apakah Anda Yakin?')">Delete</a>
                </th>
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