<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">

                <li class="nav-item <?= activate_menu('home') ?>"><a href="<?= base_url('home') ?>" class="nav-link">Home</a></li>
                <li class="nav-item <?= activate_menu('about') ?>"><a href="<?= base_url('about') ?>" class="nav-link">Profil</a></li>
                <li class="nav-item <?= activate_menu('gallery') ?>"><a href="<?= base_url('gallery') ?>" class="nav-link">Gallery</a></li>
                <li class="nav-item <?= activate_menu('jumat') ?>"><a href="<?= base_url('jumat') ?>" class="nav-link">Jadwal Petugas jumat</a></li>
                <li class="nav-item <?= activate_menu('dana') ?>"><a href="<?= base_url('dana') ?>" class="nav-link">Dana</a></li>
                <li class="nav-item">
                    <a href="blog.html" class="nav-link">
                        Kegiatan</a>
                </li>
                <li class="nav-item <?= activate_menu('saran') ?>"><a href="<?= base_url('saran') ?>" class="nav-link">Saran</a></li>
                <li class="nav-item cta  <?= activate_menu('kurban') ?>"><a href="<?= base_url('kurban') ?>" class="nav-link">Hitung Qurban</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- END nav -->