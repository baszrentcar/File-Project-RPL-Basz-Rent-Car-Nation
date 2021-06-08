<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    h4{
        margin-top: 80px;
        margin-left: 80px;
    }
    h6{
        margin-top: 60px;
        margin-left: 120px; 
        font: Roboto;
    }
    p{
        margin-top: 40px;
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
    .berikan{
        margin-top: 30px;
    }
    .formtesti{
        margin-left: 120px;
    }
    .checked {
        color: orange;
    }
    a{
        margin-top: 40px;
    }
    .psn{
        color: white;
        background-color: #FF9900;
        border: 0;
        width: 200px;
    }
    .formtesti{
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
    .container:hover input ~ .checkmark {
    background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .container input:checked ~ .checkmark {
    background-color: #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
    content: "";
    position: absolute;
    display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked ~ .checkmark:after {
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
    <h1 style="background-color: #010F35;">.</h1>
    <h4>Testimoni / <b>Memberi testimoni</b></h4>
    <h6>Memberikan testimoni mengenai BASZ</h6>
    <p>Testimoni</p>
    <form>
        <input type="text" id="fname" name="fname">
    </form>
    <p class="berikan">Berikan Rating anda</p>
    <div class="formtesti">
        <label class="container"><span class="fa fa-star checked"></span>
        <input type="radio" checked="checked" name="radio">
        <span class="checkmark"></span>
        </label>
        <label class="container"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
        <input type="radio" name="radio">
        <span class="checkmark"></span>
        </label>
        <label class="container"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
        <input type="radio" name="radio">
        <span class="checkmark"></span>
        </label>
        <label class="container"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
        <input type="radio" name="radio">
        <span class="checkmark"></span>
        </label>
        <label class="container"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span></span><span class="fa fa-star checked"></span>
        <input type="radio" name="radio">
        <span class="checkmark"></span>
        </label>
        <br>    
        <a href="" class="btn btn-primary psn"class="btn-psn">KIRIM</a>
        <a href="" class="btn back"class="btn-psn">Kembali</a>
    </div>
    
</body>

</html>
