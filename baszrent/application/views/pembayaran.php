<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .path_judul{
        margin-top: 80px;
        margin-left: 80px;
    }
    .qr-code {
        max-width: 200px;
        margin: 10px;
    }
    .isi{
        margin-top: 80px;
        margin-bottom: 200px;
    }
    .psn{
        margin-top: 40px;
        color: white;
        background-color: #FF9900;
        border: 0;
        width: 160px;
    }
    </style>
<body>
    <h1 style="background-color: #010F35;">a</h1>
    <h4 class="path_judul">Home / Lihat Mobil / Sewa Mobil /<b>Pembayaran</b></h4>
    <center>
    <div class="isi">
    <h2><b>Menunggu pembayaran</b></h2>
    <br>
    <p>Mohon selesaikan pembayaran anda sebelum maksimal 24 jam dengan detail sebagai berikut</p>
    <br>
    <title>QR Code Generator</title>
        <div class="container-fluid">
            <div class="text-center">
            <!-- Get a Placeholder image initially,
            this will change according to the
            data entered later -->
            <img src= "https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                class="qr-code img-thumbnail img-responsive" />
            </div>
        
            <div class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2"
                for="content">
                </label>
                <div class="col-sm-10">
                <!-- Input box to enter the 
                    required data -->
                <!-- <input type="text" size="60" 
                    maxlength="60" class="form-control"
                    id="content" placeholder="Enter content" /> -->
                    <script>
                         content = Math.floor(Math.random() * 1000000) + 10000;
                    </script>
                </div>
            </div>
           
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
        
                <!-- Button to generate QR Code for
                the entered data -->
                <button type="button" class=
                    "btn btn-default" id="generate">
                    Generate
                </button>
                </div>
            </div>
            </div>
        </div>
        <script src=
            "https://code.jquery.com/jquery-3.5.1.js">
        </script>
        
        <script>
            // Function to HTML encode the text
            // This creates a new hidden element,
            // inserts the given text into it 
            // and outputs it out as HTML
            function htmlEncode(value) {
            return $('<div/>').text(value)
                .html();
            }
            $(function () {
        
            // Specify an onclick function
            // for the generate button
            $('#generate').click(function () {
        
                // Generate the link that would be
                // used to generate the QR Code
                // with the given data 
                
                let finalURL = 'https://chart.googleapis.com/chart?cht=qr&chl=' +
                htmlEncode($('#content').val()) +
                '&chs=160x160&chld=L|0'
        
                // Replace the src of the image with
                // the QR code image
                $('.qr-code').attr('src', finalURL);
            });
            });

         // buat random int untuk kode pembayaran
        document.getElementById("demo").innerHTML =
        Math.floor(Math.random() * 1000000) + 10000;
        </script>
        <p>Kode unik pembayaran</p>
        <h2 id="demo"><b></b></h2>
        <body>
        <script>
        document.getElementById("demo").innerHTML =
        Math.floor(Math.random() * 999999) + 100000;
        </script>
        </body>
        <p>cara pembayaran : (kode pembayaran) + Rekening tujuan</p>
        <a href="" class="btn btn-primary psn"class="btn-psn">OK</a>
        </div>
        </center>
        
</body>

</html>
