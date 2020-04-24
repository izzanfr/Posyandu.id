
<!DOCTYPE html>
<html>
<head>
    <title>Admin | Posyandu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/adminIbuhamil.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/menu.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
</head>
<body>
    <div class="topnav" id="myTopnav">
        <img src="assets/pictures/logonew6.png" class="img-logo">
        <a href="<?= base_url() ?>C_logout/logout"><b>Log Out</a>
        <a href="<?php echo base_url('C_admibuhamil')?>">Akun Ibu Hamil</a>
        <a href="<?php echo base_url('C_admpetugaskesehatan')?>">Akun Petugas Kesehatan</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
         </a>
    </div>
    <section>
    <div class="container">
    <div class="mx-auto">
                <div>
                    <h3 class="col-h" style="text-align:center;">Data Akun Ibu Hamil</h3>
                </div>
            <div class="col-lg-12">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
            <br>
            <br>
            <input type="text" placeholder="Cari.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            <a class="btn btn-primary" href="<?= base_url('C_admibuhamil/tambah')?>"> Tambah Data </a>
            <br>
            <br>
            <table class="table table-striped table-dark table-bordered">
            <thead>
            <tr bgcolor='#F5B7B1'>
                <th scope="col">No.</th>
                <th scope="col">ID Registrasi</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Alamat</th>
                <th scope="col">TTL</th>
                <th scope="col">Kehamilan Ke-</th>
                <th scope="col">No. Telepon</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $i=1;
                foreach ($profile_ibuhamil as $ph) {
            ?>
            <tr>
                <th scope="row"><?php echo $i++?></th>
                <th scope="row"><?php echo $ph['id_registrasi']?></th>
                <th scope="row"><?php echo $ph['nama']?></th>
                <th scope="row"><?php echo $ph['username']?></th>
                <th scope="row"><?php echo $ph['password']?></th>
                <th scope="row"><?php echo $ph['alamat']?></th>
                <th scope="row"><?php echo $ph['ttl']?></th>
                <th scope="row"><?php echo $ph['kehamilan_ke']?></th>
                <th scope="row"><?php echo $ph['no_telp']?></th>
                <th>
                    <a class="btn btn-warning" href="<?php echo site_url('C_admibuhamil/update/').$ph['username'];?>">Edit</a>
                    <a class="btn btn-danger" href="<?php echo site_url('C_admibuhamil/deleteibuhamil/').$ph['username'];?>" onclick="return confirm('Apakah Anda Yakin?')">Delete</a>
                </th>
            </tr>
            <?php
                }
            ?>
            </tbody>
            </table>
            </div>
    </div>
    </div>
    </section>

</body>
</html>