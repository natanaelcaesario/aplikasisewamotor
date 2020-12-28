<?php echo view('utama/header') ?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Transaksi Pengguna</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-left">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Handphone</th>
                            <th>Tanggal Sewa</th>
                            <th>Tanggal kembali</th>
                            <th>Plat Motor</th>
                            <th>Status</th>
                            <th>Bank</th>
                            <th>Harga</th>
                            <th>Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $nomer = 1;
                        foreach ($sewa["transaksi"] as $transaksi) : ?>
                            <tr>
                                <td><?php echo $nomer++ ?></td>
                                <td><?= $transaksi->nama ?></td>
                                <td><?= $transaksi->nomorhandphone ?></td>
                                <td><?= $transaksi->tglsewa ?></td>
                                <td><?= $transaksi->tglkembali ?></td>
                                <td><?=
                                        $transaksi->plat_motor ?></td>

                                <?php if ($transaksi->status == "Diterima") { ?>
                                    <td class="text-success"> <?php echo $transaksi->status ?></td>
                                <?php } ?>
                                <?php if ($transaksi->status !== "Diterima") { ?>
                                    <td class="text-danger"> <?php echo $transaksi->status ?></td>
                                <?php } ?>
                                <td><?= $transaksi->bank ?></td>
                                <td><?= $transaksi->harga ?></td>
                                <td>
                                    <a href="<?= site_url('admin/edittransaksi/' . $transaksi->id_sewa) ?>" class="btn btn-block btn-success">Tangani</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- End of Main Content -->
    <?= $sewa['pager']->links('default', 'pagerkuh'); ?>
    <?php echo view('utama/footer') ?>
    <script>
        $("footer").attr("hidden", true);
    </script>