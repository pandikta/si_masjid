<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Kegiatan</h4>
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
                        <div class="card-body">
                            <!-- <div class="form-group form-inline">
                                <form class="form-group" method="POST" action="<?= base_url('admin/kas_masjid') ?>">
                                    <label for="inlineinput" class="col-md-3 col-form-label">Tanggal Awal</label>
                                    <div class="col-md-9 p-0">
                                        <input type="date" name="tgl1" class="form-control input-full" id="tgl1" required>
                                    </div>
                                    <label for="inlineinput" class="col-md-3 col-form-label">Tanggal Akhir</label>
                                    <div class="col-md-9 p-0">
                                        <input type="date" name="tgl2" class="form-control input-full" id="tgl2" required>
                                    </div>
                            </div>
                            <div class="form-group form-inline">
                                <button class="btn btn-danger btn-round ml-1 text-white"><i class="fa fa-print" style="margin-right: 5px;"> </i>Cetak Periode</button>
                                <a href="<?= base_url('admin/kegiatan/cetak_pengajian') ?>" target="_blank" class="btn btn-danger btn-round ml-1 text-white">
                                    <i class="fa fa-print"> </i>
                                    Cetak Semua
                                </a>
                            </div> -->
                            <form action="<?= base_url('admin/kegiatan/cetak_pengajian') ?>" method="POST">
                                <div class="form-group">
                                    <input type="hidden" name="tahun" value="<?= date('Y') ?>">
                                    <label for="exampleFormControlSelect1">Pengajian Bulan : </label>
                                    <select class="form-control col-md-1" name="bulan" id="exampleFormControlSelect1" required>
                                        <option value="">Pilih Bulan</option>
                                        <option value="January">Januari</option>
                                        <option value="February">Februari</option>
                                        <option value="March">Maret</option>
                                        <option value="April">April</option>
                                        <option value="May">Mei</option>
                                        <option value="Juny">Juni</option>
                                        <option value="July">juli</option>
                                        <option value="August">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="October">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                </div>
                                <div class="form-group form-inline">
                                    <button class="btn btn-danger btn-round ml-1 text-white"><i class="fa fa-print" style="margin-right: 5px;"> </i>Cetak</button>
                                </div>
                            </form>

                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="card-title d-md-flex"><span><i class="fas fa-table"></i></span> Data pengajian</div>
                                <button data-toggle="modal" data-target="#modal_form" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </button>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover text-white">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>Tanggal</th>
                                            <th>Ustadz</th>
                                            <th>Tema Kajian</th>
                                            <th>Tempat Pelaksanaan</th>
                                            <th>Keterangan</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Hari</th>
                                            <th>Waktu</th>
                                            <th>Tanggal</th>
                                            <th>Ustadz</th>
                                            <th>Tema Kajian</th>
                                            <th>Tempat Pelaksanaan</th>
                                            <th>Keterangan</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($pengajian as $p) : ?>
                                            <tr>
                                                <td>
                                                    <?= array_search($p, $pengajian) + 1; ?>
                                                </td>
                                                <td><?= $p['hari']; ?></td>
                                                <td><?= $p['waktu']; ?></td>
                                                <?php $tgl = $p['tanggal'] ?>
                                                <td><?= date_indo($tgl) ?></td>
                                                <td><?= $p['ustadz'] ?></td>
                                                <td><?= $p['tema_kajian'] ?></td>
                                                <td><?= $p['tempat'] ?></td>
                                                <td><?= $p['keterangan'] ?></td>
                                                <td>
                                                    <?php if ($user['level'] == 'administrator') : ?>
                                                        <div class="form-button-action">
                                                            <a href="" data-toggle="modal" data-target="#editpengajian<?= $p['unique_code'] ?>" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="<?= base_url('admin/kegiatan/delete_pengajian/') . $p['unique_code']; ?>" data-toggle="tooltip" class="btn btn-link btn-danger tombol-hapus" data-original-title="Hapus">
                                                                <i class="fa fa-times"></i>
                                                            </a>

                                                        </div>
                                                    <?php else : ?>
                                                        <div class="form-button-action">
                                                            <a href="" data-toggle="modal" data-target="#editpengajian<?= $p['unique_code'] ?>" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="<?= base_url('admin/kegiatan/delete_pengajian/') . $p['unique_code']; ?>" data-toggle="tooltip" class="btn btn-link btn-danger tombol-hapus" data-original-title="Hapus">
                                                                <i class="fa fa-times"></i>
                                                            </a>

                                                        </div>
                                                    <?php endif; ?>

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

        <!-- Modal Tambah pengajian-->
        <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content card">
                    <div class="modal-header">
                        <h2 class="modal-title text-white" id="exampleModalCenterTitle">Tambah Pengajian</h2>
                        <button style="color: tomato;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/kegiatan/tambah_pengajian') ?>" method="POST">
                            <input type="hidden" name="unique_code" value="<?= strtolower(random_string('alnum', 32)) ?>">
                            <div class="form-group">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="icon-calendar"></i>
                                    </span>
                                    <input name="hari" type="text" class="form-control" placeholder="Hari Pelaksanaan" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="icon-book-open"></i>
                                    </span>
                                    <input name="waktu" type="text" class="form-control" placeholder="Waktu Pelaksanaan" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="fas fa-money-check-alt"></i>
                                    </span>
                                    <input name="tanggal" type="date" class="form-control" placeholder="Tanggal Pelaksanaan" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="fas fa-money-check-alt"></i>
                                    </span>
                                    <input name="ustadz" type="text" class="form-control" placeholder="Ustadz" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="fas fa-money-check-alt"></i>
                                    </span>
                                    <input name="tema_kajian" type="text" class="form-control" placeholder="Tema Kajian" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="fas fa-money-check-alt"></i>
                                    </span>
                                    <input name="tempat" type="text" class="form-control" placeholder="Tempat Pelaksanaan" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end modal add -->

        <?php foreach ($pengajian as $p) : ?>
            <!-- Modal edit pengajian-->
            <div class="modal fade" id="editpengajian<?= $p['unique_code'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content card">
                        <div class="modal-header">
                            <h2 class="modal-title text-white" id="exampleModalCenterTitle">Tambah Pengajian</h2>
                            <button style="color: tomato;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('admin/kegiatan/edit_pengajian/') . $p['unique_code'] ?>" method="POST">
                                <input type="hidden" name="unique_code" value="<?= strtolower(random_string('alnum', 32)) ?>">
                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="icon-calendar"></i>
                                        </span>
                                        <input name="hari" type="text" class="form-control" placeholder="Hari Pelaksanaan" value="<?= $p['hari'] ?>" required>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="icon-book-open"></i>
                                        </span>
                                        <input name="waktu" type="text" class="form-control" placeholder="Waktu Pelaksanaan" value="<?= $p['waktu'] ?>" required>
                                        <span class=" help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="fas fa-money-check-alt"></i>
                                        </span>
                                        <input name="tanggal" type="date" class="form-control" placeholder="Tanggal Pelaksanaan" value="<?= $p['tanggal'] ?>" required>
                                        <span class=" help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="fas fa-money-check-alt"></i>
                                        </span>
                                        <input name="ustadz" type="text" class="form-control" placeholder="Ustadz" value="<?= $p['ustadz'] ?>" required>
                                        <span class=" help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="fas fa-money-check-alt"></i>
                                        </span>
                                        <input name="tema_kajian" type="text" class="form-control" placeholder="Tema Kajian" value="<?= $p['tema_kajian'] ?>" required>
                                        <span class=" help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="fas fa-money-check-alt"></i>
                                        </span>
                                        <input name="tempat" type="text" class="form-control" placeholder="Tempat Pelaksanaan" value="<?= $p['tempat'] ?>" required>
                                        <span class=" help-block"></span>
                                    </div>
                                </div>

                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <!-- end modal edit -->