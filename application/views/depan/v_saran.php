<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/about.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('home') ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Saran <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Saran</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="flash-saran" data-flashsaran="<?= $this->session->flashdata('message'); ?>"></div>
        <div class="flash-gagal" data-flashgagal="<?= $this->session->flashdata('flash'); ?>"></div>
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">kotak Saran</span>
                <h2 class="mb-4">Ingin Menyampaikan Saran?</h2>
                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-12">
                <form action="<?= base_url('saran/tambah_saran') ?>" method="POST" class="p-4 p-md-5 contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Nama*" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email*" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="telepon" class="form-control" placeholder="Telepon*" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="pesan" id="" cols="30" rows="7" class="form-control" placeholder="Pesan*" required></textarea>
                            </div>
                            <p style="font-size: 12px;">*Max 100 kata</p>
                        </div>
                        <div class=" col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Kirim Saran" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                </form>

            </div>


        </div>
    </div>
</section>