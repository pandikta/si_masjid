<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Kotak Saran</h4>
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
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="card-title d-md-flex"><span><i class="fas fa-table"></i></span> Kotak Saran</div>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover text-white">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Telepon</th>
                                            <th>Pesan</th>
                                            <th>Tanggal</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Telepon</th>
                                            <th>Pesan</th>
                                            <th>Tanggal</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($saran as $g) : ?>
                                            <tr>
                                                <td>
                                                    <?= array_search($g, $saran) + 1; ?>
                                                </td>
                                                <td><?= $g['nama']; ?></td>

                                                <td><?= $g['email'] ?></td>
                                                <td><?= $g['telepon'] ?></td>
                                                <td><?= $g['pesan'] ?></td>
                                                <td><?= date($g['created_at']) ?></td>
                                                <td>
                                                    <div class="form-button-action">

                                                        <a href="<?= base_url('admin/kotaksaran/delete_saran/') . encrypt_url($g['id']) ?>" data-toggle="tooltip" class="btn btn-link btn-danger tombol-hapus" data-original-title="Hapus">
                                                            <i class="fa fa-times"></i>
                                                        </a>

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