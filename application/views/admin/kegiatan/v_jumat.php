<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Petugas Jumat</h4>
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
                        <div class="card-body">
                            <form action="<?= base_url('admin/kegiatan/cetak_petugasjumat') ?>" method="POST">
                                <div class="form-group">
                                    <input type="hidden" name="tahun" value="<?= date('Y') ?>">
                                    <label for="exampleFormControlSelect1">Bulan</label>
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
                                <div class="card-title d-md-flex"><span><i class="fas fa-table"></i></span> Data Petugas Jumat</div>
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
                                            <th>Tanggal</th>
                                            <th>Imam</th>
                                            <th>Khotib</th>
                                            <th>Muadzin</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Imam</th>
                                            <th>Tanggal</th>
                                            <th>Muadzin</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($jumat as $j) : ?>
                                            <tr>
                                                <td>
                                                    <?= array_search($j, $jumat) + 1; ?>
                                                </td>
                                                <?php $tgl = $j['tgl'] ?>
                                                <td><?= date_indo($tgl) ?></td>
                                                <td><?= $j['imam']; ?></td>
                                                <td><?= $j['khotib'] ?></td>
                                                <td><?= $j['muazin'] ?></td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="" data-toggle="modal" data-target="#editjumat<?= $j['unique_code'] ?>" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?= base_url('admin/kegiatan/delete_petugasjumat/') . $j['unique_code']; ?>" data-toggle="tooltip" class="btn btn-link btn-danger tombol-hapus" data-original-title="Hapus">
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

        <!-- Modal Tambah pengajian-->
        <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content card">
                    <div class="modal-header">
                        <h2 class="modal-title text-white" id="exampleModalCenterTitle">Tambah Petugas Jumat</h2>
                        <button style="color: tomato;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/kegiatan/tambah_petugasjumat') ?>" method="POST">
                            <input type="hidden" name="unique_code" value="<?= strtolower(random_string('alnum', 32)) ?>">
                            <div class="form-group">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="icon-calendar"></i>
                                    </span>
                                    <input name="tgl" type="date" class="form-control" placeholder="Tanggal" required>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1" name="imam" required>
                                    <option value="">Pilih Imam</option>
                                    <?php foreach ($imam as $i) : ?>
                                        <option value="<?= $i['nama'] ?>"><?= $i['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1" name="khotib" required>
                                    <option value="">Pilih Khatib</option>
                                    <?php foreach ($khotib as $i) : ?>
                                        <option value="<?= $i['nama'] ?>"><?= $i['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1" name="muazin" required>
                                    <option value="">Pilih Muadzin</option>
                                    <?php foreach ($muazin as $i) : ?>
                                        <option value="<?= $i['nama'] ?>"><?= $i['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
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

        <?php foreach ($jumat as $j) : ?>
            <!-- Modal edit pengajian-->
            <div class="modal fade" id="editjumat<?= $j['unique_code'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content card">
                        <div class="modal-header">
                            <h2 class="modal-title text-white" id="exampleModalCenterTitle">Edit Petugas Jumat</h2>
                            <button style="color: tomato;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('admin/kegiatan/edit_petugasjumat/') . $j['unique_code'] ?>" method="POST">
                                <input type="hidden" name="unique_code" value="<?= strtolower(random_string('alnum', 32)) ?>">
                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="icon-calendar"></i>
                                        </span>
                                        <input name="tgl" type="date" class="form-control" placeholder="Tanggal" value="<?= $j['tgl'] ?>" required>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="imam" required>
                                        <option value="<?= $j['imam'] ?>" selected><?= $j['imam'] ?></option>
                                        <?php foreach ($imam as $i) : ?>
                                            <option value="<?= $i['nama'] ?>"><?= $i['nama'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="khotib" required>
                                        <option value="<?= $j['khotib'] ?>" selected><?= $j['khotib'] ?></option>
                                        <?php foreach ($khotib as $i) : ?>
                                            <option value="<?= $i['nama'] ?>"><?= $i['nama'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="muazin" required>
                                        <option value="<?= $j['muazin'] ?>" selected><?= $j['muazin'] ?></option>
                                        <?php foreach ($muazin as $i) : ?>
                                            <option value="<?= $i['nama'] ?>"><?= $i['nama'] ?></option>
                                        <?php endforeach ?>
                                    </select>
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