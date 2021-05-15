<head>
    <link href="<?php echo base_url('assets/css/home.css')?>" rel="stylesheet">
</head>
<h1 style="background-color: #010F35;">.</h1>
<img class="card-img" src="<?php base_url()?>assets/images/home/banner_home.png" alt="Card image" width="1200" height="250">

<div class="card-item">
    <br> <br>
    <h3>Pilih Mobil Untuk di Edit</h3>
    <h7>Menampilkan mobil untuk diedit</h7>
    <br><br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMobil">tambah mobil + </button>
    <br><br><br>
    <div id="sidebar-wrapper">
    </div> <!-- /#sidebar-wrapper -->
    <?php foreach ($mobil as $m) { ?>
        <div class="row">
            <div class="media position-relative">
                <img height="100px" aaclass="mr-3" src="assets/images/rs/icon.png" alt="Generic placeholder image">
                <div class="media-body">
                    <h4 class="mt-0"><?= $m['nama_mobil'] ?></h4>
                    <p><?= $m['harga'] ?></p>
                    <p><?= $m['warna'] ?></p>
                    <p><?= $m['plat_nomor'] ?></p>
                    <p><?= $m['status'] ?></p>
                    <p><?= $m['deskripsi'] ?></p>

                    <a type="button" class="btn btn-danger btn-sm" href="<?php echo base_url('MobilController/delete/') . $m['id_mobil'] ?>" onClick="return confirm('Apakah Anda Yakin untuk menghapus?')">Delete</a></td>
                    <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#UpdateMobil<?= $m['id_mobil'] ?>"> Update</a>

                </div>
            </div>
        </div>
        <br>
        <a href="<?= base_url('PemesananController') ?>" class="btn btn-primary">Pesan Sekarang</a>
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
<br><br><br><br>  <br><br><br><br>
    <img class="card-img" src="<?php base_url()?>assets/images/home/footer.png" alt="Card image">
    <br><br><br><br>
