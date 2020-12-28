<?php echo view('navbar');
?>

<header class="masthead">
    <div class="container h-100">
        <form action="<?= site_url('user/profil') ?>" method="POST" enctype="multipart/form-data">
            <div class="card text-center">
                <div class="card-header" style="font-weight: bolder;">
                    Dashboard User
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <img name"gambar" alt="Anda Belum Punya Foto Profil" src="<?= base_url('uploads/profil/' . $info->gambar) ?>" alt="img" height="300" width="200">
                        </div>
                        <div class="col-6 text-left">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $info->nama ?>" readonly>
                            <label for="nama">Nomer Handphone</label>
                            <input type="text" class="form-control" name="nomorhandphone" value="<?= $info->nomorhandphone ?>">
                            <br>
                            <a href="<?= site_url('user/foto') ?>" class="btn btn-success" style="float: right; margin-right:5px">Ganti Foto Profil</a>
                        </div>
                        <div class="col-6"></div>
                    </div>

                </div>
                <div class="card-footer text-muted">

                    <button class="btn btn-primary" type="submit" style="float: right;">Update Profil</button>
                    <a href="<?= site_url('user/transaksi') ?>" class="btn btn-secondary" style="float: right; margin-right:5px">Lihat Transaksi</a>

                </div>
            </div>
        </form>

    </div>
</header>

<?php
echo view('footer');
?>

<script>
    $("#navbar1").attr("hidden", true);
    $("#navbar2").attr("hidden", true);
    $("#navbar3").attr("hidden", true);
</script>