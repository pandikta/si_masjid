<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit Pengguna</h4>
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
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"><span><i class="fas fa-edit"></i></span> Edit form dibawah ini</div>
                    </div>
                    <div class="row">

                        <form class="col-md-12 col-lg-4" action="<?= base_url('admin/pengguna/edit_pengguna/') . $usertampil['id']; ?>" method="post">
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="masukkan nama" value="<?= $usertampil['nama']; ?>" required>
                                <?= form_error('Nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="masukkan username" value="<?= $usertampil['username']; ?>" required>
                                <?= form_error('Username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" value="<?= $usertampil['password']; ?>" required>
                                <?= form_error('Password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Level</label>
                                <select name="level" class="form-control" id="exampleFormControlSelect1">
                                    <?php foreach ($level as $l) : ?>
                                        <?php if ($l == $usertampil['level']) : ?>
                                            <option value="<?= $l; ?>" selected><?= $l; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $l; ?>"><?= $l; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="card-action">
                                <button type="submit" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('admin/pengguna'); ?>" type="button" class="btn btn-danger">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>