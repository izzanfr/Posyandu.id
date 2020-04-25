<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/navbar_menu.css">
    <script type="text/javascript" src="assets/js/menu.js"></script>
    <title>Home | Posyandu</title>
</head>
<body>
<nav>
    <div class="topnav">
         <img src="<?php echo base_url()?>assets/pictures/logonew6.png" alt="" class="img-logo">
         <ul>
              <li><a href="<?= base_url('C_profile_petugaskes')?>">Profile</a></li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Lihat Data Ibu Hamil
            <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url().'C_catatankesehatanpetugas'?>">Catatan Kesehatan</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url().'C_catatanpemenuhangizipetugas'?>">Catatan Pemenuhan Gizi</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url().'C_catatanimunisasipetugas'?>">Catatan Imunisasi</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Input Data Ibu Hamil
            <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url().'C_inputkesehatan'?>">Catatan Kesehatan</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url().'C_inputpemenuhangizi'?>">Catatan Pemenuhan Gizi</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url().'C_inputimunisasi'?>">Catatan Imunisasi</a></li>
                </ul>
            </li>
            <li><a href="<?= base_url() ?>C_logout/logout">Logout</a></li>
        </ul>
    </div>
        <script>
            $(document).ready(function(){
            $(".dropdown-toggle").dropdown("toggle");
            });
        </script>
    <div class="div-br"></div>
</nav>
</body>
</html>