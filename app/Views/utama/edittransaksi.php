<?php echo view('utama/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h5 class="text-left text-dark">Edit Transaksi</h5>
            <?php if ($transaksi->status == "Diterima") { ?>
                <h6 class="text-left text-success">Transaksi Diterima</h6>
            <?php } ?>
            <?php if ($transaksi->status !== "Diterima") { ?>
                <h6 class="text-left text-danger">Transaksi Butuh Pengananan</h6>
            <?php } ?>
        </div>
        <div class="card-body">
            <label for="">Bukti Bayar</label>
            <br>
            <img src="<?= base_url('uploads/bukti_bayar/') . "/" . $transaksi->bukti_bayar ?>" class="rounded" alt="User Belum Upload Bukti Bayar" height="200px">
            <br>
            <hr>
            <label for="">Nama Motor</label>
            <input type="text" name="nama" class="form-control" value="<?= $transaksi->motor ?>" readonly>
            <label for="">Plat Motor</label>
            <input type="text" name="plat_motor" class="form-control" value="<?= $transaksi->plat_motor ?>" readonly>
            <label for="">Bayar</label>
            <input type="text" name="" class="form-control" value="<?= $transaksi->harga ?>" readonly>
            <label for="">Alamat</label>
            <input type="text" name="" class="form-control" name="lokasi_jemput" value="<?= $transaksi->lokasi_jemput ?>" readonly>
            <br>

        </div>
        <div class="card-footer py-3">
            <a class="btn btn-primary" href="<?= site_url('admin/terima/' . $transaksi->id_sewa . '/' . $transaksi->id_motor) ?>">Terima Transaksi</a>
            <a class="btn btn-danger" href="<?= site_url('admin/tolak/' . $transaksi->id_sewa) ?>">Tolak Transaksi</a>
        </div>

    </div>
    <!-- End of Main Content -->

    <?php echo view('utama/footer') ?>
    <script>
        $("footer").attr("hidden", true);
    </script>