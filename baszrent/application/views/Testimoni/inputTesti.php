<html>

<head>
</head>

<body class="login">
    <form action="<?= site_url('TestimoniController/addTesti') ?>" method="post" accept-charset="utf-8">
        <div class="form-group">
            <label class="label control-label">Masukkan Testimoni</label>
            <input type="pesan" class="form-control" name="pesan" placeholder="pesan">
        </div>

        <button type="submit" class="btn btn-info">Tambah</button>
    </form>

</body>

</html>