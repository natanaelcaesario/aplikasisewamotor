<?php echo view('navbar');
?>
<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="card text-center">
            <div class="card-header" style="font-weight: bolder;">
                Transaksi Anda
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    <p>
                        Silahkan Melakukan Pembayaran Melalui Rekening <br>
                        <strong>BANK MANDIRI 123-123-123 A/N Natanael Caesario Pasaribu</strong>
                    </p>

                </div>

                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Lokasi Jemput</td>
                            <td>Nomer Handphone</td>
                            <td>Motor</td>
                            <td>Tanggal Sewa</td>
                            <td>Tanggal Pengambilan</td>
                            <td>Kode Booking</td>
                            <td>Status</td>
                            <td>Option</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($hai as $transaksi) : ?>
                            <tr>
                                <td><?= $transaksi->nama ?></td>
                                <td><?= $transaksi->lokasi_jemput ?></td>
                                <td><?= $transaksi->nomorhandphone ?></td>
                                <td><?= $transaksi->motor ?></td>
                                <td><?= $transaksi->tglsewa ?></td>
                                <td><?= $transaksi->tglkembali ?></td>
                                <td><?= $transaksi->kode_booking ?></td>
                                <td><?= $transaksi->status
                                    ?></td>
                                <td>
                                    <a href="<?= site_url('transaksi/bayar/' . $transaksi->id_sewa) ?>" class="btn btn-primary">Upload Pembayaran</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-muted">

            </div>
        </div>
    </div>
</header>


<?php echo view('footer') ?>
<script>
    $("#navbar1").attr("hidden", true);
    $("#navbar2").attr("hidden", true);
    $("#navbar3").attr("hidden", true);
</script>