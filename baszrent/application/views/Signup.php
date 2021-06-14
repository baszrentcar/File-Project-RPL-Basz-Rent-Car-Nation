<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER</title>
    <style type="text/css">
        h3 {
            font-weight: 600;
            color: #384048;
            text-align: center;
            line-height: 1.6em;
            margin-bottom: 0.3em;
            margin-top: 0.3em;
        }

        p {
            color: #384048;
            text-align: center;
            line-height: 1.6em;
            margin-bottom: 2.3em;
        }

        a {
            font-size: 0.97em;
            color: #8a97a1;
            text-decoration: none;
        }

        a:hover {
            color: rgb(60, 60, 255);
        }

        form {
            background-color: #FFF;
            padding: 3em;
            padding-bottom: 4em;
            border-radius: 9px;
            max-width: 400px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 10px 40px -14px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }

        form input {
            color: #384048;
            background-color: #e8eeef;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
            border: none;
            border-radius: 4px;
            padding: 2em;
            margin-bottom: 1.3em;
            width: 100%;
        }

        form input:focus {
            outline: none;
        }

        .button {
            font-weight: 600;
            text-align: center;
            font-size: 12px;
            color: #FFF;
            background-color: rgb(255, 147, 5);
            border: none;
            border-radius: 4px;
            padding: 0.8em;
            margin-top: 1em;
            margin-bottom: 1em;
            cursor: pointer;
            overflow: hidden;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.3);
        }

        body {
            background-image: url(assets/images/bg.png);
            width: auto;
            height: 954;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>



<body class="bg-white">
    <nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-left">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><b>LOGO/BASZ</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><b>HOME</b></a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><b>SEWA MOBIL</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><b>PEMESANAN</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><b>PEMBAYARAN</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><b>TESTIMONI</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><b>LOGOUT</b></a>
                </li>
            </ul>
        </div>
    </nav>
    <br /><br />
    <left>
        <div class="container">
            <form action="<?= site_url('SignupController/signup') ?>" method="post">
                <br />
                <h3>REGISTER</h3></br>
                <div class="form-content">
                    <form>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">No. KTP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="colFormLabel" name="no_ktp" placeholder=" ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="colFormLabel" name="username" placeholder=" ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="colFormLabel" name="nama" placeholder=" ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="colFormLabel" name="email" placeholder=" ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="colFormLabel" name="password" placeholder=" ">
                            </div>
                        </div>
                    </form>
                    <button type="submit" class="button">
                        Register
                    </button>
                    <br />
                </div>
            </form>
        </div>
    </left>
</body>
