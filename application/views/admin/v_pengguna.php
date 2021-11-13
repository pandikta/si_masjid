<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Managemen Pengguna</h4>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Data Pengguna</h4>

                                    <a href="<?= base_url('addpengguna') ?>" class="btn btn-primary btn-round ml-auto">
                                        <i class="fa fa-plus"></i>
                                        Tambah user
                                    </a>

                                </div>
                            </div>

                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Divisi</th>
                                                <th style="width: 10%">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Divisi</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach ($usertampil as $u) : ?>
                                                <tr>
                                                    <td><?= array_search($u, $usertampil) + 1; ?></td>
                                                    <td><?= $u['nama']; ?></td>
                                                    <td><?= $u['username']; ?></td>
                                                    <td><?= $u['level']; ?></td>
                                                    <td>
                                                        <div class="form-button-action">
                                                            <a href="<?= base_url('admin/pengguna/edit_pengguna/') . encrypt_url($u['id']); ?>" data-toggle="tooltip" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="<?= base_url('admin/pengguna/delete_pengguna/') . encrypt_url($u['id']);  ?>" data-toggle="tooltip" class="btn btn-link btn-danger tombol-hapus" data-original-title="Hapus">
                                                                <i class="fa fa-times"></i>
                                                            </a>
                                                            <a href="<?= base_url('admin/pengguna/reset_pass/') . encrypt_url($u['id']);  ?>" data-toggle="tooltip" class="btn btn-link btn-warning tombol-reset" data-original-title="Reset Password Jadi : 1234">
                                                                <i class="fas fa-undo"></i>
                                                            </a>

                                                            <a href="<?= base_url('admin/pengguna/toggle/') . encrypt_url($u['id']);  ?>" class="btn btn-link  <?= $u['is_active'] ? 'btn-success tombol-aktif' : 'btn-danger tombol-nonaktif' ?>" data-toggle="tooltip" data-original-title="<?= $u['is_active'] ? 'Nonaktifkan User' : 'Aktifkan User' ?>"><i class="fa fa-fw fa-power-off"></i></a>

                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>