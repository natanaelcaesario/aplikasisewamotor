<?php echo view('navbar') ?>

<?php
$awal = $sewa->tglsewa;
$akhir = $sewa->tglkembali;
$dif = abs(strtotime($awal) - strtotime($akhir));
$hari = floor($dif / 82000);
$total = $hari * $sewa->harga;
?>

<form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data" style="padding:50px">
    <div class="container">
        <center>
            <h1>FORM PEMBAYARAN</h1>
            <br>
            <img name"gambar" alt="Anda Belum Upload Transaksi" src="<?= base_url('uploads/bukti_bayar/' . $sewa->bukti_bayar) ?>" alt="img" height="300" width="200">
            <div class="col-6 text-left">
                <label for="nama">Nama Bank</label>
                <select class="form-control" name="bank" required>
                    <option>Pilih Bank...</option>
                    <option>Bank BCA</option>
                    <option>Bank DKI</option>
                    <option>Bank Danamon</option>
                    <option>Bank BJB</option>
                </select>


                <br>
                <label for="nama">Kode Booking</label>
                <input type="text" class="form-control" name="kode_booking" value="<?= $sewa->kode_booking ?>" readonly>
                <br>
                <input type="file" name="bukti_bayar" required>
                <input type="text" name="total" value=<?= $total ?> hidden>
                <hr>
                <?php if ($sewa->status == "Lunas") { ?>
                    <button class="btn btn-primary" hidden>Konfirmasi Pembayaran</button>
                    <h1 class="text-center text-success"><?= $sewa->status  ?></h1>
                <?php }  ?>
                <?php if ($sewa->status == "Transaksi Diproses") { ?>
                    <button class="btn btn-primary" hidden>Konfirmasi Pembayaran</button>
                    <h5 class="text-left text-primary">Transaksi Anda Sedang Kami Proses</h5>
                <?php }  ?>
                <?php if ($sewa->status == "Belum Lunas") { ?>
                    <h5>Total yang harus anda Bayarkan adalah Sejumlah</h5>
                    <h6 class="text-primary">Rp. <?= $total ?></h6>
                    <br>
                    <button class="btn btn-primary">Konfirmasi Pembayaran</button>
                <?php }  ?>
                <?php if ($sewa->status == "Ulangi Pembayaran") { ?>
                    <button class="btn btn-primary">Konfirmasi Pembayaran</button>
                    <br>
                    <br>
                    <h5 class="text-center text-primary">Mohon pastikan nominal dan bukti transfer anda sudah benar</h5>
                <?php }  ?>


            </div>
        </center>
    </div>
</form>

<?php echo view('footer.php') ?>


<script>
    $("#mainNav").attr("hidden", true);
    $("#footer").attr("hidden", true);
</script>