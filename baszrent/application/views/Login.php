<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Basz Rent Car Nation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="./css/login.css"/> -->
    <style>
        body {
            background-image: url(bg.jpg);
            width: auto;
            height: 954px;
        }

        a {
            font-family: 'Roboto';
        }

        h3 {
            font-family: 'Roboto';
            font-size: 36;
            text-align: center;
            color: #FF9900;
            padding-bottom: 30px;
        }

        p {
            font-size: 18;
            color: #8E93A3;
            padding-top: 10px;
        }

        .card {
            background-color: white;
            border-radius: 5px;
            margin-top: 80px;
            margin-left: 80px;
            margin-right: 750px;
            padding-left: 60px;
            padding-right: 60px;
            padding-top: 100px;
            padding-bottom: 200px
        }

        .card input[type="text"] {
            border: none;
            height: 40px;
            width: 100%;
            outline-color: #8E93A3;
            border-color: #F8F8F8;
            background-color: #F8F8F8;
            border-radius: 5px;
        }

        .card input[type="password"] {
            border: none;
            height: 40px;
            width: 100%;
            outline-color: #8E93A3;
            border-color: #F8F8F8;
            background-color: #F8F8F8;
            border-radius: 5px;
        }

        .card input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            width: 100%;
            background-color: #FF9900;
            color: white;
            border-radius: 5px;
            margin-top: 35px;
        }

        .card input[type="submit"]:hover {
            cursor: pointer;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-left">
        <!-- Brand/logo -->
        <b class="navbar-brand" href="#">BASZ Rent Car Nation</b>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('TestimoniController') ?>">TESTIMONI</a>
            </li>
        </ul>
    </nav>

    <div class="card">
        <form action="<?= site_url('LoginController') ?>" method="post">
            <h3>LOGIN</h3>
            <p>Email / Username</p>
            <input type="text" name="username">
            <p>Password</p>
            <input type="password" name="password">
            <input type="submit" name="login" value="Log In">
            <center>
                <br>
                <span>Belum punya akun?<a href="<?= site_url('SignupController') ?>">Daftar Disini</a></span>
            </center>
        </form>
    </div>
</body>

</html>