<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/about.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('home') ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Gallery <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Gallery</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <?php foreach ($galeri as $g) : ?>

                <div class="col-md-2">
                    <a href="<?= base_url('assets/img/galeri/') . $g['foto'] ?>" class="image-popup img gallery ftco-animate d-flex align-items-center justify-content-center" style="background-image: url(assets/img/galeri/<?= $g['foto'] ?>);">
                        <span class="overlay"></span>
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-search"></span>
                        </div>
                    </a>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>