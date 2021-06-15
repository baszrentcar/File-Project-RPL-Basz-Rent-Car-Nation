<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h4 {
            margin-top: 80px;
            margin-left: 80px;
        }

        h6 {
            margin-top: 60px;
            margin-left: 120px;
            font: Roboto;
        }

        p {
            margin-top: 19px;
            margin-left: 120px;
            font: Roboto;
        }

        input {
            width: 50%;
            border: 1px solid #C6CBDA;
            margin-left: 120px;
            padding-right: 120px;
            padding-bottom: 200px;
        }

        .berikan {
            margin-top: 30px;
        }

        .formtesti {
            margin-left: 120px;
        }

        .checked {
            color: orange;
        }

        a {
            margin-top: 40px;
        }

        .psn {
            color: white;
            background-color: #FF9900;
            border: 0;
            width: 200px;
        }

        .formtesti {
            margin-bottom: 100px;
        }

        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input~.checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .container input:checked~.checkmark {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container input:checked~.checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .container .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
    </style>
</head>

<body>
    <?php if (!isset($user)) { ?>
        <div class="alert alert-danger" role="alert">
            <strong>Anda belum Login. Silahkan login terlebih dahulu</strong>
        </div>
        <div>
            <a class="btn navbar-dark my-2 my-sm-0" href="<?= base_url('LoginController'); ?>">Login</a>
            or
            <a class="btn navbar-dark my-2 my-sm-0" href="<?= base_url('RegistController'); ?>">Sign Up</a>
        </div>
    <?php } else { ?>
        <h1 style="background-color: #010F35;">.</h1>
        <h4>Testimoni / <b>Memberi testimoni</b></h4>
        <h6>Memberikan testimoni mengenai BASZ</h6>
        <form action="<?= base_url() . 'TestimoniController/addTesti'  ?>" method="post">
            <p>Username : <?= $user['nama'] ?> </p>
            <p>Testimoni</p>
            <input type="text" id="pesan" name="pesan">
            <input type="hidden" id="rating" name="rating">
            <p class="berikan">Berikan Rating anda</p>
            <div class="formtesti">
                <label class="container"><span class="fa fa-star checked"></span>
                    <input type="radio" name="radio" id="satu" onclick="rate_satu()">
                    <span class=" checkmark"></span>
                </label>
                <label class="container"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                    <input type="radio" name="radio" id="dua" onclick="rate_dua()">
                    <span class="checkmark"></span>
                </label>
                <label class="container"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                    <input type="radio" name="radio" id="tiga" onclick="rate_tiga()">
                    <span class="checkmark"></span>
                </label>
                <label class="container"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
                    <input type="radio" name="radio" id="empat" onclick="rate_empat()">
                    <span class="checkmark"></span>
                </label>
                <label class="container"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></span><span class="fa fa-star checked"></span>
                    <input type="radio" name="radio" id="lima" onclick="rate_lima()">
                    <span class="checkmark"></span>
                </label>
                <br>
                <input type="submit" class="btn btn-primary psn" class="btn-psn" onclick="cek_rating()" value="KIRIM">
                <!-- <a href="" class="btn btn-primary psn" class="btn-psn">KIRIM</a> -->
                <p href="<?= base_url('TestimoniController'); ?>" class="btn btn-primary back" class="btn-psn">Kembali</p>
            </div>
        </form>

    <?php }  ?>

    <!-- <button onclick="rate_satu()">qwe</button> -->
    <!-- javascript -->
    <script type="text/javascript">
        function rate_satu() {
            if (document.getElementById('satu').checked) {
                document.getElementById('rating').value = "satu";
            }
        }

        function rate_dua() {
            if (document.getElementById('dua').checked) {
                document.getElementById('rating').value = "dua";
            }
        }

        function rate_tiga() {
            if (document.getElementById('tiga').checked) {
                document.getElementById('rating').value = "tiga";
            }
        }

        function rate_empat() {
            if (document.getElementById('empat').checked) {
                document.getElementById('rating').value = "empat";
            }
        }

        function rate_lima() {
            if (document.getElementById('lima').checked) {
                document.getElementById('rating').value = "lima";
            }
        }

        function cek_rating() {
            if (document.getElementById('rating').value == "") {
                alert('Please Select Rating')
            }
        }
    </script>
</body>

</html>
