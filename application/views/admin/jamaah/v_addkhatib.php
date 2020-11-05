<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Tambah Data Khatib</h4>
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

            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('massage'); ?>">
            </div>

            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <div class="card-title"><span><i class="fas fa-edit"></i></span> Isikan form dibawah ini</div>
                    </div>
                    <div class="row">
                        <form class="col-md-12 col-lg-4" action="<?= base_url('admin/jamaah/tambah_khatib'); ?>" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="masukkan nama" value="<?= set_value('nama'); ?>" required>
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="masukkan alamat" value="<?= set_value('alamat'); ?>" required>
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">No Handphone</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="no hp" value="<?= set_value('no_hp'); ?>" required>
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="card-action">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="<?= base_url('admin/jamaah/khatib'); ?>" type="button" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>