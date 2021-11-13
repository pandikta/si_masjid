<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Kumpulan Foto Kegiatan</h4>
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
                                <div class="card-title d-md-flex"><span><i class="fas fa-table"></i></span> Foto-foto Kegiatan</div>
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
                                            <th>Dokumentasi</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Tanggal Pelaksanaan</th>
                                            <th>Ketearangan</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Dokumentasi</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Tanggal Pelaksanaan</th>
                                            <th>Ketearangan</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($galeri as $g) : ?>
                                            <tr>
                                                <td>
                                                    <?= array_search($g, $galeri) + 1; ?>
                                                </td>
                                                <td><img src="<?= base_url('assets/img/galeri/' . $g['foto']) ?>" style="width:100px;"></td>
                                                <td><?= $g['nama_kegiatan']; ?></td>
                                                <?php $tgl = $g['tgl'] ?>
                                                <td><?= date_indo($tgl) ?></td>
                                                <td><?= $g['keterangan'] ?></td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="" data-toggle="modal" data-target="#editfoto<?= $g['unique_code'] ?>" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?= base_url('admin/kegiatan/delete_foto/') . $g['unique_code']; ?>" data-toggle="tooltip" class="btn btn-link btn-danger tombol-hapus" data-original-title="Hapus">
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
                        <h2 class="modal-title text-white" id="exampleModalCenterTitle">Tambah Foto Kegiatan</h2>
                        <button style="color: tomato;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open_multipart('admin/kegiatan/tambah_foto') ?>
                        <input type="hidden" name="unique_code" value="<?= strtolower(random_string('alnum', 32)) ?>">
                        <div class="form-group">
                            <label for="">*File max 2mb</label>
                            <div class="input-icon">

                                <span class="input-icon-addon">
                                    <i class="icon-calendar"></i>
                                </span>
                                <input name="foto" type="file" class="form-control" placeholder="Dokumantasi" required>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                    <i class="icon-book-open"></i>
                                </span>
                                <input name="nama_kegiatan" type="text" class="form-control" placeholder="Nama Kegiatan" required>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                    <i class="fas fa-money-check-alt"></i>
                                </span>
                                <input name="tgl" type="date" class="form-control text-white" placeholder="Tanggal Pelaksanaan" required>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                    <i class="fas fa-money-check-alt"></i>
                                </span>
                                <input name="keterangan" type="text" class="form-control" placeholder="Keterangan" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
        <!-- end modal add -->

        <?php foreach ($galeri as $g) : ?>
            <!-- Modal edit pengajian-->
            <div class="modal fade" id="editfoto<?= $g['unique_code'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content card">
                        <div class="modal-header">
                            <h2 class="modal-title text-white" id="exampleModalCenterTitle">Tambah Pengajian</h2>
                            <button style="color: tomato;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('admin/kegiatan/edit_galeri/') . $g['unique_code'] ?>" method="POST">
                                <input type="hidden" name="unique_code" value="<?= strtolower(random_string('alnum', 32)) ?>">
                                <div class="form-group">
                                    <label for="">*File max 2mb</label>
                                    <div class="input-icon">

                                        <span class="input-icon-addon">
                                            <i class="icon-calendar"></i>
                                        </span>
                                        <input name="foto" type="file" value="<?= $g['foto'] ?>" class="form-control" placeholder="Dokumantasi" required>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="icon-book-open"></i>
                                        </span>
                                        <input name="nama_kegiatan" value="<?= $g['nama_kegiatan'] ?>" type="text" class="form-control" placeholder="Nama Kegiatan" required>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="fas fa-money-check-alt"></i>
                                        </span>
                                        <input name="tgl" type="date" value="<?= $g['tgl'] ?>" class="form-control text-white" placeholder="Tanggal Pelaksanaan" required>
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="fas fa-money-check-alt"></i>
                                        </span>
                                        <input name="keterangan" type="text" value="<?= $g['keterangan'] ?>" class="form-control" placeholder="Keterangan" required>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <!-- end modal edit -->

        <!-- script datatabel -->
        <!-- <script>
            //tabel pemasukan dengan serverside
            $(document).ready(function() {

                $('#basic-datatables2').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": {
                        "url": "<?= site_url('admin/kegiatan/get_ajax_galeri') ?>",
                        "type": "POST"
                    },
                    // "columnDefs": [{
                    //     "targets": 5,
                    //     "className": 'tombol-hapus',
                    //     "data": null,
                    //     "orderable": false,
                    //     // "defaultContent": "<div class='form-button-action'><a href='' data-toggle='modal' data-target='#editpemasukan' class='btn btn-link btn-primary btn-lg'><i class='fa fa-edit'></i></a> <a  href='' class='btn btn-link btn-danger btn-lg tombol-hapus'><i class='fa fa-times'></i></a> </div>"
                    // }]
                });
            });
        </script> -->