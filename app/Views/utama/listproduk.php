<?php echo view('utama/header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Motor Rental</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Motor</th>
                            <th>Plat Motor</th>
                            <th>Harga Sewa</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $nomor = 1;
                        foreach ($data as $motor) : ?>
                            <tr>
                                <td><?php echo $nomor++ ?></td>
                                <td><?= $motor->nama_motor ?></td>
                                <td><?= $motor->plat_motor ?></td>
                                <td><?= $motor->harga_sewa ?></td>
                                <td><?= $motor->status ?></td>
                                <td>
                                    <a href="<?= site_url('admin/editproduk/' . $motor->id_motor) ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?= site_url('admin/hapuproduk/' . $motor->id_motor) ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- End of Main Content -->

    <?php echo view('utama/footer') ?>
    <script>
        $("footer").attr("hidden", true);
    </script>