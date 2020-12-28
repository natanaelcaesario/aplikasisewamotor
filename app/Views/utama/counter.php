<?php echo view('utama/header') ?>

<div class="container">
    <h3 class="text-center">Laporan Keuangan</h3>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Selamat Datang!<br> Halaman ini adalah arsip untuk PT. Madinah Iman Wisata Jepara</li>
        </ol>
        <div class="card shadow mb-4">
            <div class="card-header text-right">
                <h6 class="ml-0 float-left font-weight-bold text-dark">Data Pengguna Rental Motor Jogja</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="<?= base_url('admin/export') ?>" method="POST" enctype="multipart/form-data">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Motor</th>
                                    <th>Nomor Handphone</th>
                                    <th>Kode Booking</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $nomer = 1;
                                foreach ($result as $pengguna) : ?>
                                    <tr>
                                        <td><?php echo $nomer++ ?></td>
                                        <td><?= $pengguna->nama ?></td>
                                        <td><?= $pengguna->motor ?></td>
                                        <td><?= $pengguna->nomorhandphone ?></td>
                                        <td><?= $pengguna->kode_booking ?></td>
                                        <td><?= $pengguna->harga ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <input type="text" value="<?= $tglawal ?>" name="tglawal" hidden>
                        <input type="text" value="<?= $tglakhir ?>" name="tglakhir" hidden>
                        <button class="btn btn-primary float-right" type="submit">Export</button>
                    </form>
                </div>
            </div>


        </div>
        <!-- End of Main Content -->
        <br>
    </div>
    <?php echo view('utama/footer') ?>
    <script>
        $("footer").attr("hidden", true);
    </script>