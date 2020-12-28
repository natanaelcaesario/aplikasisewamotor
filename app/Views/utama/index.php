<?php echo view('utama/header') ?>
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header">
            Default Card Example
        </div>
        <div class="card-body">
            This card uses Bootstrap's default styling with no utility classes added. Global
            styles are the only things modifying the look and feel of this default card example.
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card mb-4">
                <div class="card-header text-primary">
                    Default Card Example
                </div>
                <div class="card-body">
                    This card uses Bootstrap's default styling with no utility classes added. Global
                    styles are the only things modifying the look and feel of this default card example.
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mb-4">
                <div class="card-header">
                    Default Card Example
                </div>
                <div class="card-body">
                    This card uses Bootstrap's default styling with no utility classes added. Global
                    styles are the only things modifying the look and feel of this default card example.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Pengguna Rental Motor Jogja</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Handphone</th>
                            <th>Email</th>
                            <th>Perintah</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $nomer = 1;
                        foreach ($semua as $pengguna) : ?>
                            <tr>
                                <td><?php echo $nomer++ ?></td>
                                <td><?= $pengguna->nama ?></td>
                                <td><?= $pengguna->nomorhandphone ?></td>
                                <td><?= $pengguna->email ?></td>

                                <td>
                                    <a href="<?= site_url('admin/edituser/' . $pengguna->id_pengguna) ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?= site_url('admin/hapususer/' . $pengguna->id_pengguna) ?>" class="btn btn-danger">Hapus</a>
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