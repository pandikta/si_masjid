<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Ubah Kata Sandi</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Pages</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Starter Page</a>
                    </li>
                </ul>
            </div>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="flash-gagal" data-flashgagal="<?= $this->session->flashdata('flash'); ?>"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="<?= base_url('admin/pengguna/ubah_katasandi') ?>" method="POST">
                            <div class="card-body">
                                <div class=" form-group">
                                    <label>Kata Sandi Lama</label>
                                    <input type="password" name="passLama" class="form-control col-md-3 " required>
                                </div>
                                <div class=" form-group">
                                    <label>Kata Sandi Baru</label>
                                    <input type="password" name="passBaru" class="form-control col-md-3 " required minlength="6">
                                </div>
                                <div class=" form-group">
                                    <label>Konfirmasi Kata Sandi</label>
                                    <input type="password" name="konfir_pass" class="form-control col-md-3 " required minlength="6">
                                </div>
                            </div>

                            <div class=" card-action">
                                <button class="btn btn-success">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>