<?php echo view('utama/header') ?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h5 class="text-center text-dark" style="font-weight: bolder;">Tambah Motor</h5>

        </div>
        <form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <label for="">Nama Motor</label>
                <input type="text" name="nama_motor" class="form-control">
                <label for="">Plat Motor</label>
                <input type="text" class="form-control" name="plat_motor">
                <label for="">Harga Sewa 1 Hari</label>
                <input type="text" class="form-control" name="harga_sewa">
                <label for="">Deskripsi</label>
                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                <br>
                <label for="">Gambar Motor</label>
                <br>
                <input type="file" name="gambar_motor">
            </div>
            <div class="card-footer py-3">
                <button class="btn btn-primary" type="submit">Tambah Motor</button>
            </div>
        </form>
    </div>
    <!-- End of Main Content -->

    <?php echo view('utama/footer') ?>
    <script>
        $("footer").attr("hidden", true);
    </script>