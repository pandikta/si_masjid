<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="dark2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="<?= base_url('assets/vendor_template_admin') ?>/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?= $user['nama']; ?>
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="<?= base_url('profile') ?>">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('katasandi') ?>">
                                    <span class="link-collapse">Ubah Kata Sandi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item <?= activate_menu('dashboard') ?>">
                    <a href="<?= base_url('admin/dashboard'); ?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item <?= activate_menu('pengguna') ?>">
                    <a href="<?= base_url('pengguna') ?>">
                        <i class="fas fa-user"></i>
                        <p>Managemen Pengguna</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>

                <li class="nav-item <?= activate_menu('jamaah') ?>">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-users"></i>
                        <p>Data Jamaah</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?= base_url('imam') ?>">
                                    <span class="sub-item">Imam</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('khatib') ?>">
                                    <span class="sub-item">Khatib</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('pengurus') ?>">
                                    <span class="sub-item">Pengurus</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('muazin') ?>">
                                    <span class="sub-item">Muazin</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('remaja_masjid') ?>">
                                    <span class="sub-item">Remaja Masjid</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="nav-item <?= activate_menu('kas_masjid') ?>">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-money-check-alt"></i>
                        <p>Kas Masjid</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?= base_url('pemasukan'); ?>">
                                    <span class="sub-item">Pemasukan</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('pengeluaran'); ?>">
                                    <span class="sub-item">Pengeluaran</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('rekap') ?>">
                                    <span class="sub-item">Rekap</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item <?= activate_menu('qurban') ?>">
                    <a data-toggle="collapse" href="#forms">
                        <i class="fas fa-weight"></i>
                        <p>Qurban</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <!-- <li>
                                <a href="<?= base_url('#') ?>">
                                    <span class="sub-item">Data Warga</span>
                                </a>
                            </li> -->
                            <li>
                                <a href="<?= base_url('qurban') ?>">
                                    <span class="sub-item">Hitung Qurban</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?= activate_menu('kegiatan') ?>">
                    <a data-toggle="collapse" href="#kegiatan">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>Kegiatan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="kegiatan">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?= base_url('pengajian') ?>">
                                    <span class="sub-item">Pengajian</span>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="<?= base_url('admin/kegiatan') ?>">
                                    <span class="sub-item">TPA</span>
                                </a>
                            </li> -->
                            <li>
                                <a href="<?= base_url('tugasjumat') ?>">
                                    <span class="sub-item">Petugas Jumat</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('galeri') ?>">
                                    <span class="sub-item">Foto Kegiatan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?= activate_menu('kotaksaran') ?>">
                    <a href="<?= site_url('kotaksaran') ?>">
                        <i class="fas fa-envelope"></i>
                        <p>Kotak Saran</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?= site_url('logout') ?>">
                        <i class="icon-logout"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->