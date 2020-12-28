<?php echo view('navbar') ?>
<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">RENTAL MOTOR YOGYAKARTA</h1>
                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5">Sewa motor online sekarang gampang banget!</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#product">Sewa Sekarang</a>
            </div>
        </div>
    </div>
</header>

<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <h2 class="text-center mt-0">Kenapa Harus Kami ?</h2>
        <hr class="divider my-4" />
        <div class="row align-items-center">

            <div class="col-lg-4 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                    <h3 class="h4 mb-2">Up to Date</h3>
                    <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                    <h3 class="h4 mb-2">Ready to Publish</h3>
                    <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                    <h3 class="h4 mb-2">Made with Love</h3>
                    <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About-->
<section class="page-section bg-dark" id="product">
    <div class="container">
        <div class="row text-center align-items-center">
            <?php foreach ($motor as $produk) : ?>
                <?php if ($produk->status !== "Tersedia") { ?>
                    <div class="col-4">
                        <div class="card shadow-lg bg-white" style="width: 18rem; margin:20px">
                            <img class="card-img-top" src="<?= base_url('uploads/gambar_produk/' . $produk->gambar_motor) ?>" alt="Card image cap" height="300px" width="200px">
                            <div class="card-body">
                                <h5 class="card-title"><?= $produk->nama_motor ?></h5>
                                <p class="bg-danger text-white rounded">Tidak Tersedia</p>
                                <hr class="divider" />

                                <p>Harga Sewa Harian:<br> <strong>Rp. <?= $produk->harga_sewa ?></strong></p>
                                <p class="card-text"><?= $produk->deskripsi ?></p>
                                <a href="<?= site_url('user/sewa/') . $produk->id_motor ?>" class="btn btn-primary" hidden>Sewa Sekarang</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if ($produk->status == "Tersedia") { ?>
                    <div class="col-4">
                        <div class="card shadow-lg bg-white" style="width: 18rem; margin:20px">
                            <img class="card-img-top" src="<?= base_url('uploads/gambar_produk/' . $produk->gambar_motor) ?>" alt="Card image cap" height="300px" width="200px">
                            <div class="card-body">
                                <h5 class="card-title"><?= $produk->nama_motor ?></h5>
                                <p class="bg-success text-white rounded">Tersedia</p>
                                <hr class="divider" />

                                <p>Harga Sewa Harian:<br> <strong>Rp. <?= $produk->harga_sewa ?></strong></p>
                                <p class="card-text"><?= $produk->deskripsi ?></p>
                                <a href="<?= site_url('user/sewa/') . $produk->id_motor ?>" class="btn btn-primary">Sewa Sekarang</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php endforeach ?>

        </div>
    </div>
</section>

<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mt-0">Hubungi Kami.</h2>
                <hr class="divider my-4" />
                <p class="text-muted mb-5">Ingin Menyewa Motor ? Klik Live Chat atau hubungi Nomor Dibawah ini.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                <div>+62 813-9399-4829</div>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                <a class="d-block" href="mailto:contact@yourwebsite.com">juwitamanurung@gmail.com</a>
            </div>
        </div>
    </div>
</section>

<?php echo view('footer') ?>