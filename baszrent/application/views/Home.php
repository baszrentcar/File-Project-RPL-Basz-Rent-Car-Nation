<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="<?php echo base_url('assets/css/home.css') ?>" rel="stylesheet">
</head>

<body>
    <h1 style="background-color: #010F35;">.</h1>
    <!-- gambar si bapa ganteng -->
    <img class="card-img" src="<?php base_url() ?>assets/images/home/banner_home.png" alt="Card image" width="1200" height="250">

    <!-- filter + list mobil-->
    <div class="content">
        <!-- filter -->
        <div class="row">

            <div class="col-md-auto">
                <h3 class="judul-filter">Filter</h3>
                <div class="container-filter">
                    <!-- filter -->
                    <div id="wrapper">
                        <!-- Sidebar -->
                        <ul class="navbar-nav bg-white sidebar sidebar-light accordion shadow-sm" id="accordionSidebar">
                            <br>
                            <!-- Nav Item - Dashboard -->
                            <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Cari Mobil" aria-label="Search" aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-primary">cari</button>
                            </div>
                            </li>

                            <!-- Divider -->
                            <hr class="sidebar-divider">

                            <!-- Heading -->
                            <div class="sidebar-heading">
                                <b>Filter Berdasarkan</b>
                            </div>
                            <br>
                            <h7>Kapasitas Penumpang</h7>
                            <br>
                            <!-- Default checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    <p>
                                        < 5 Penumpang</p>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    <p>
                                        < 5 Penumpang</p>
                                </label>
                            </div>

                            <!-- Divider -->
                            <hr class="sidebar-divider">
                            <h7>Merek Mobil</h7>
                            <br>
                            <!-- Default checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    <p>Toyota</p>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    <p>Honda</p>
                                </label>
                            </div>
                        </ul>
                        <!-- End of Sidebar -->

                    </div>
                </div>
            </div>

            <!-- list mobil -->
            <div class="col">
                <div class="container-listmobil">
                    <div class="card-item">
                        <br> <br>
                        <h3>Pilih Mobil Untuk di Sewa</h3>
                        <br><br>
                        <?php if (isset($user) && $user['level'] == "pemilik") { ?>
                            <button type="button" class="btn btn-tambah" data-toggle="modal" data-target="#addMobil">Tambah mobil + </button>
                            <br><br><br>
                        <?php } ?>
                        <div id="sidebar-wrapper">
                        </div> <!-- /#sidebar-wrapper -->

                        <?php foreach ($mobil as $m) { ?>
                            <div class="row">
                                <div class="media position-relative">
                                    <img height="100px" aaclass="mr-3" src="<?= site_url('/assets/images/mobil/' . $m['photo']) ?>" alt="foto mobil">
                                    <div class="media-body">
                                        <h4 class="mt-0"><?= $m['nama_mobil'] ?></h4>
                                        <p class="harga"><?= $m['harga'] ?></p>
                                        <!--<p><?= $m['warna'] ?></p>-->
                                        <!--<p><?= $m['plat_nomor'] ?></p>-->
                                        <p><?= $m['status'] ?></p>
                                        <!--<p><?= $m['deskripsi'] ?></p>-->
                                        <?php if (isset($user)) { ?>
                                            <a href="<?= base_url('PemesananController') ?>" class="btn btn-primary psn" class="btn-psn">Sewa</a>
                                        <?php } ?>
                                        <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=""> Lihat</a>
                                        <?php if (isset($user) && $user['level'] == "pemilik") { ?>
                                            <a type="button" class="btn btn-danger btn-sm" href="<?php echo base_url('MobilController/delete/') . $m['id_mobil'] ?>" onClick="return confirm('Apakah Anda Yakin untuk menghapus?')">Delete</a></td>
                                            <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#UpdateMobil<?= $m['id_mobil'] ?>"> Update</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <br>
                        <?php } ?>



                        <!-- ====================== ADD MOBIL ====================== -->
                        <div class="modal fade" id="addMobil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <center>
                                            <h2>TAMBAH DATA MOBIL</h2>
                                        </center>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo form_open(base_url('MobilController/Save'), array('enctype' => 'multipart/form-data')); ?>
                                        <table cellpadding="8">
                                            <div>
                                                <label>Nama Mobil</label>
                                                <input class="form-control" type="text" name="nama_mobil" required>
                                            </div>
                                            <div>
                                                <label>Warna</label>
                                                <input class="form-control" type="text" name="warna" required>
                                            </div>
                                            <div>
                                                <label>Plat Nomor</label>
                                                <input class="form-control" type="text" name="plat_nomor" required>
                                            </div>
                                            <div>
                                                <label>Deskripsi</label>
                                                <textarea class="form-control" type="text" name="deskripsi" required> </textarea>
                                            </div>
                                            <div>
                                                <label>Harga</label>
                                                <input class="form-control" type="number" name="harga" required>
                                            </div>
                                            <div>
                                                <label>Penumpang</label>
                                                <input class="form-control" type="number" name="penumpang" required>
                                            </div>
                                            <div>
                                                <label>Bagasi</label>
                                                <input class="form-control" type="number" name="bagasi" required>
                                            </div>
                                            <div>
                                                <label>Gambar</label><br>
                                                <input type="file" name="gambar">
                                            </div>

                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ====================== END ADD MOBIL ====================== -->

                        <!-- EDIT MOBIL -->
                        <?php foreach ($mobil as $m) { ?>
                            <div class="modal fade" id="UpdateMobil<?= $m['id_mobil'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <center>
                                                <h2>EDIT DATA MOBIL</h2>
                                            </center>
                                        </div>

                                        <!-- <?= $m['photo'] ?> -->
                                        <div class="modal-body">
                                            <form method="POST" action="<?= base_url() . 'MobilController/update/' . $m['id_mobil'] ?>">
                                                <div>
                                                    <img height="250px" src="<?= base_url() ?>assets/images/mobil/<?= $m['photo'] ?>" alt="foto mobil">
                                                </div>
                                                <div>
                                                    <label>Nama Mobil</label>
                                                    <input class="form-control" type="text" name="nama_mobil" value="<?= $m['nama_mobil'] ?>" required>
                                                </div>
                                                <div>
                                                    <label>Warna</label>
                                                    <input class="form-control" type="text" name="warna" value="<?= $m['warna'] ?>" required>
                                                </div>
                                                <div>
                                                    <label>Plat Nomor</label>
                                                    <input class="form-control" type="text" name="plat_nomor" value="<?= $m['plat_nomor'] ?>" required>
                                                </div>
                                                <div>
                                                    <label>Deskripsi</label>
                                                    <textarea class="form-control" type="text" name="deskripsi" required><?= $m['deskripsi'] ?> </textarea>
                                                </div>
                                                <div>
                                                    <label>Harga</label>
                                                    <input class="form-control" type="number" name="harga" value="<?= $m['harga'] ?>" required>
                                                </div>
                                                <div>
                                                    <label>Penumpang</label>
                                                    <input class="form-control" type="number" name="penumpang" value="<?= $m['Penumpang'] ?>" required>
                                                </div>
                                                <div>
                                                    <label>Bagasi</label>
                                                    <input class="form-control" type="number" name="bagasi" value="<?= $m['Bagasi'] ?>" required>
                                                </div>
                                                <div>
                                                    <label>Gambar</label><br>
                                                    <input type="file" name="gambar">
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<br><br><br><br><br><br><br><br>
<img class="card-img" src="<?php base_url() ?>assets/images/home/footer.png" alt="Card image">
<br><br><br><br>
