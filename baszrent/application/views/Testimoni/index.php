<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!DOCTYPE html>

    <style>
        .center {
            text-align: center;
        }

        body {
            background-color: #010F35;
        }

        h2 {
            color: white;
            font-family: roboto;
            font-size: 64;
        }

        p,
        a {
            color: white;
            font-family: roboto;
            font-size: 24;
        }

        .card,
        car {
            background-color: white;
            font-color: black;
            font-family: roboto;
            font-size: 24;
            margin-right: 150px;
            margin-left: 80px;
            padding: 20px;
        }

        .card-header {
            margin-left: 40px;
            font-style: bold;
        }

        .card-body {
            margin-left: 40px;
        }
    </style>

</head>

<body>
    <br></br>
    <br></br>
    <div class="center">
        <h2>Apa Kata Mereka?</h2>
        <p>Ayo tulliskan pengalamanmu dengan kamu,
            <a href="<?= site_url('TestimoniController/inputTesti') ?>">Klik disini</a>
        </p>
        <br></br>
        <br></br>
    </div>

    <?php foreach ($testimoni as $t) { ?>
        <div class="card">
            <div class="card-header">
                <b><?= $t['nama'] ?></b>
            </div>
            <div class="card-body">
                <h3 class="card-text"><?= $t['pesan'] ?></h3>
                <h3 class="card-text">bintang</h3>
            </div>
        </div>
        <br>
    <?php } ?>


</body>

</html>