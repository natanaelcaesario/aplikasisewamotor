<?php echo view('navbar') ?>

<section class="page-section bg-primary">
    <div class="container text-center shadow-lg" style="padding: 50px;">
        <h2 style="color: white; padding:30px">FORM PENYEWAAN MOTOR
            <hr>
        </h2>

        <div class="row bg-primary">
            <div class="col-lg-6 ml-0 ">
                <div class="card" style="width: 400px; margin:0 auto; float: none; margin-bottom:30px">
                    <img class="card-img-top" src="<?= base_url('uploads/gambar_produk/' . $motor->gambar_motor) ?>" alt="Card image cap" height="400px" width="200px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $motor->nama_motor ?></h5>
                        <hr class="divider" />
                        <h5 class="card-title">Rp. <?= $motor->harga_sewa ?>/Hari</h5>
                        <p class="card-text"><?= $motor->deskripsi ?></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-left">
                <form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" width=200 value="<?php echo $data['nama'] ?>" readonly>
                    <label for="">Nomor Handphone</label>
                    <input type="tel" name="nomorhandphone" class="form-control" width=200 value="<?php echo $data['nomorhandphone'] ?>" readonly>
                    <label for="">Plat Motor</label>
                    <input type="text" name="plat_motor" class="form-control" width=200 value="<?= $motor->plat_motor ?>" readonly>
                    <input type="text" name="harga" class="form-control" width=200 value=" <?= $motor->harga_sewa ?>" readonly hidden>

                    <label for="">Motor</label>
                    <input type="text" name="motor" class="form-control" value="<?= $motor->nama_motor ?>" readonly>

                    <br>
                    <label for="">Lokasi Jemput</label>
                    <input type="text" name="lokasi_jemput" class="form-control" width=200 required>
                    <label for="">Tanggal Sewa</label>
                    <input type="date" name="tglsewa" id="today" class="form-control" width=200 required>
                    <label for="">Tanggal Kembali</label>
                    <input type="date" name="tglkembali" class="form-control" width=200 required>
                    <input type="text" name="id_motor" hidden class="form-control" width=200 value="<?= $motor->id_motor ?>" readonly>
                    <input type="text" name="id_pengguna" hidden class="form-control" width=200 value="<?= $id_pengguna ?>" readonly>
                    <br>
                    <p align="right">
                        <button class="btn btn-success mr-auto">Lakukan Pembayaran</button>
                    </p>

                </form>

            </div>
        </div>




    </div>
</section>

<?php echo view('footer') ?>

<script>
    // getting date
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#today").value = today;
</script>