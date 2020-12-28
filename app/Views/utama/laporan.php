<?php echo view('utama/header') ?>
<div class="container">
    <h3 class="text-center">Laporan Keuangan</h3>
    <form action="<?= current_url() ?>" enctype="multipart/form-data" method="POST">
        <label for="">Tanggal Awal</label>
        <input type="date" class="form-control" name="tglawal" required>
        <hr>
        <label for="">Tanggal Akhir</label>
        <input type="date" class="form-control" name="tglakhir" required>
        <br>
        <button type="submit" class="btn btn-primary float-right">Lihat Transaksi</button>
    </form>
</div>