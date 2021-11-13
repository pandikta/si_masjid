<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Profile</h4>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="card-title d-md-flex"> Edit Profile</div>

                            </div>
                        </div>
                        <form action="<?= base_url('admin/pengguna/edit_profile') ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <labe class="text-light">Username</labe>
                                    <input type="text" name="username" class="form-control col-md-3 text-dark" value="<?= $user['username'] ?>" disabled required>
                                </div>
                                <div class="form-group">
                                    <labe class="text-light">Divisi</labe>
                                    <input type="text" name="divisi" class="form-control col-md-3 text-dark" value="<?= $user['divisi'] ?>" disabled required>
                                </div>
                                <div class=" form-group">
                                    <label for="disableinput">Nama</label>
                                    <input type="text" name="nama" class="form-control col-md-3 " id="disableinput" value="<?= $user['nama'] ?>" required>
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