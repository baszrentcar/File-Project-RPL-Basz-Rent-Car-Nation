<!DOCTYPE html>
<html lang="en">
<head>
    <link href="assets/css/login.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Basz Rent Car Nation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-left">
        <!-- Brand/logo -->
        <b class="navbar-brand" href="#">BASZ Rent Car Nation</b>

        <!-- Links -->
        <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href=<?= site_url('TestimoniController') ?>>TESTIMONI</a>
        </li>
        </ul>
    </nav>
    <div class="wallpaper" style="background-image: url('assets/images/bg.jpg');">>
    
        <div class="card">
            <form action="<?= base_url().'LoginController/aksi_login'  ?>" method="post">
                <h3>LOGIN</h3>
                <p>Username</p>
                <input type="text" name="username">
                <p>Password</p>
                <input type="password" name="password">
                <input type="submit" name="login" value="Log In">
                <center>
                <br>
                <span>Belum punya akun?<a href=<?= site_url('SignUpController') ?>>Daftar Disini</a></span>
                </center>
            </form>
        </div>
    </div>
</body>
</html>