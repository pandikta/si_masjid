<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Tambah Pengguna</h4>
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
                        <form class="col-md-12 col-lg-4" action="<?= base_url('addpengguna'); ?>" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="masukkan nama" value="<?= set_value('nama'); ?>" required>
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input type="text" name="username" class="form-control" placeholder="masukkan username" value="<?= set_value('username'); ?>" required>
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input id="mybutton" onclick="change()" class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-sign text-white">Lihat Password</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Level</label>
                                <select name=" level" class="form-control" id="exampleFormControlSelect1">
                                    <option>Pilih Level</option>
                                    <option>Administrator</option>
                                    <option>Bendahara</option>
                                </select>
                                <?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="<?= base_url('admin/pengguna'); ?>" type="button" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>