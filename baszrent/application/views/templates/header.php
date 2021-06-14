<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>

    <!-- MY CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/styles.css">

    <title><?php echo $judul ?></title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!--<img class="navbar-brand" height="70px" src="<?php echo base_url(); ?>assets/images/logo/2.png">-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= base_url('MobilController'); ?>">Home</a>
                    <a class="nav-item nav-link" href="<?= base_url('MobilController'); ?>">Pemesanan</a>
                    <a class="nav-item nav-link" href="<?= base_url('MobilController'); ?>">Pembayaran</a>
                    <a class="nav-item nav-link" href="<?= base_url('TestimoniController'); ?>">Testimoni</a>
                </div>
            </div>
            <div class="text-right" class="collapse navbar-collapse">
                <?php if (isset($user)) { ?>
                    <a class="btn navbar-dark my-2 my-sm-0" href="<?= base_url('HomeController/logout'); ?>">Logout</a>
                <?php } else { ?>
                    <a class="btn navbar-dark my-2 my-sm-0" href="<?= base_url('LoginController'); ?>">Login</a>
                <?php } ?>
            </div>
        </div>
    </nav>
</head>

<body>
