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
                            <span class="user-level">Bendahara</span>
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
                                <a href="#edit">
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
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
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