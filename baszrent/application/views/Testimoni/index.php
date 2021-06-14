<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            color: black;
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

        .checked {
            color: orange;
        }
    </style>
</head>

<body>
    <br></br>
    <br></br>
    <div class="center">
        <h2>Apa Kata Mereka?</h2>
        <p>Ayo tulliskan pengalamanmu dengan kamu,<a href="<?= site_url('TestimoniController/inputTesti') ?>"> Klik disini</a>
        </p>
        <br></br>
        <br></br>
    </div>

    <?php foreach ($testimoni as $t) { ?>
        <div class="card">
            <div class="card-header">
                <b><?= $t['nama'] ?></b>
            </div>
            <div class="card-body" onload="Show_rating()">
                <h3 class="card-text"><?= $t['pesan'] ?></h3>

                <!-- IF UNTUK RATING -->
                <?php if ($t['rating'] == "satu") { ?>
                    <label class="container"><span class="fa fa-star checked"></span>
                    </label>
                <?php } else if ($t['rating'] == "dua") { ?>
                    <label class="container"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                    </label>
                <?php } else if ($t['rating'] == "tiga") { ?>
                    <label class="container"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                    </label>
                <?php } else if ($t['rating'] == "empat") { ?>
                    <label class="container"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                    </label>
                <?php } else if ($t['rating'] == "lima") { ?>
                    <label class="container"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></span><span class="fa fa-star checked"></span>
                    </label>
                <?php } ?>
                <!-- END IF RATING -->

            </div>
        </div>
        <br>
    <?php } ?>

</body>
