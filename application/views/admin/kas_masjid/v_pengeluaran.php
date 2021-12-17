<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Pengeluaran</h4>
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

            <!-- Row Card No Padding -->
            <div class="row row-card-no-pd">

                <div class="col-sm-9 col-md-8">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-1">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-coins text-success"></i>
                                    </div>
                                </div>
                                <div class="col-5 col-stats">
                                    <div class="numbers">
                                        <p style="font-size: 20px;" class="card-category">Total Pengeluaran</p>
                                        <h4 class="card-title">Rp <?= rupiah($totalpengeluaran['tot_keluar']); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group form-inline">
                                        <form class="form-group" method="POST" action="<?= base_url('admin/kas_masjid/pengeluaran') ?>">
                                            <label for="inlineinput" class="col-md-3 col-form-label">Tanggal Awal</label>
                                            <div class="col-md-9 p-0">
                                                <input type="date" name="tgl1" class="form-control input-full" id="tgl1" required>
                                            </div>
                                            <label for="inlineinput" class="col-md-3 col-form-label">Tanggal Akhir</label>
                                            <div class="col-md-9 p-0">
                                                <input type="date" name="tgl2" class="form-control input-full" id="tgl2" required>
                                            </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-action px-6 py-2">
                                <button class="btn btn-primary">Cari</button>
                                <a href="<?= base_url('pengeluaran') ?>" class="btn btn-primary text-white">Tampil Semua</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="card-title"><span><i class="fas fa-table"></i></span> Data Pengeluaran</div>
                                <button data-toggle="modal" data-target="#tambahPengeluaran" class="btn btn-primary btn-round ml-auto">
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
                                            <th>Jenis Lazis</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <?php if ($user['level'] == 'administrator') : ?>
                                                <th>Pencatat</th>
                                                <th>Dicatat pada</th>
                                            <?php endif; ?>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Lazis</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <?php if ($user['level'] == 'administrator') : ?>
                                                <th>Pencatat</th>
                                                <th>Dicatat pada</th>
                                            <?php endif; ?>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($tampilpengeluaran as $tp) : ?>
                                            <tr>
                                                <td>
                                                    <?= array_search($tp, $tampilpengeluaran) + 1; ?>
                                                </td>
                                                <?php $tgl = $tp['tgl_km'] ?>
                                                <td><?= date_indo($tgl) ?></td>
                                                <td><?= $tp['lazis']; ?></td>
                                                <td><?= "Rp " . rupiah($tp['keluar']); ?></td>
                                                <td><?= $tp['keterangan']; ?></td>
                                                <?php if ($user['level'] == 'administrator') : ?>
                                                    <td><?= $tp['username'] ?></td>
                                                    <td><?= $tp['created_at'] ?></td>
                                                <?php endif; ?>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="" data-toggle="modal" data-target="#editpengeluaran<?= $tp['unique_code'] ?>" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?= base_url('admin/kas_masjid/delete_pengeluaran/') . $tp['unique_code']; ?>" data-toggle="tooltip" class="btn btn-link btn-danger tombol-hapus" data-original-title="Hapus">
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


        <!-- Modal Tambah Pengeluaran-->
        <div class="modal fade" id="tambahPengeluaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content card">
                    <div class="modal-header">
                        <h2 class="modal-title text-white" id="exampleModalCenterTitle">Tambah Pengeluaran</h2>
                        <button style="color: tomato;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/kas_masjid/tambah_pengeluaran') ?>" method="POST">
                            <input type="hidden" name="unique_code" value="<?= strtolower(random_string('alnum', 32)) ?>">
                            <input type="hidden" name="username" value="<?= $user['username'] ?>">
                            <div class="form-group">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="icon-calendar"></i>
                                    </span>
                                    <input name="tgl_km" type="date" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="icon-book-open"></i>
                                    </span>
                                    <input name="keterangan" type="text" class="form-control" placeholder="Keterangan" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <i class="fas fa-money-check-alt"></i>
                                    </span>
                                    <input name="keluar" id="masuk" type="text" class="form-control" placeholder="Jumlah pengeluaran" required>
                                </div>
                            </div>

                            <div class="form-group form-floating-label">
                                <select name="lazis" class="form-control input-solid" id="selectFloatingLabel2" required>
                                    <option value="">&nbsp;</option>
                                    <option>Pengeluaran</option>
                                </select>
                                <label for="selectFloatingLabel2" class="placeholder">Jenis Lazis</label>
                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
            <script type="text/javascript">
                var masuk = document.getElementById('masuk');
                masuk.addEventListener('keyup', function(e) {
                    // tambahkan 'Rp.' pada saat form di ketik
                    // gunakan fungsi formatmasuk() untuk mengubah angka yang di ketik menjadi format angka
                    masuk.value = formatmasuk(this.value, 'Rp ');
                });

                /* Fungsi formatmasuk */
                function formatmasuk(angka, prefix) {
                    var number_string = angka.replace(/[^,\d]/g, '').toString(),
                        split = number_string.split(','),
                        sisa = split[0].length % 3,
                        masuk = split[0].substr(0, sisa),
                        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                    // tambahkan titik jika yang di input sudah menjadi angka ribuan
                    if (ribuan) {
                        separator = sisa ? '.' : '';
                        masuk += separator + ribuan.join('.');
                    }

                    masuk = split[1] != undefined ? masuk + ',' + split[1] : masuk;
                    return prefix == undefined ? masuk : (masuk ? 'Rp ' + masuk : '');
                }
            </script>
        </div>
        <!-- end modal add -->


        <?php foreach ($tampilpengeluaran as $tp) : ?>
            <!-- Modal Edit pengeluaran-->
            <div class="modal fade" id="editpengeluaran<?= $tp['unique_code'] ?>" tabindex="-1" role="dialog" aria-labelledby="editpengeluaran" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content card">
                        <div class="modal-header">
                            <h2 class="modal-title text-white" id="editpengeluaran">Edit pengeluaran</h2>
                            <button style="color: tomato;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('admin/kas_masjid/edit_pengeluaran/') . $tp['unique_code'] ?>" method="POST">
                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="icon-calendar"></i>
                                        </span>
                                        <input id="tgl_km" name="tgl_km" type="date" class="form-control" value="<?= $tp['tgl_km'] ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="icon-book-open"></i>
                                        </span>
                                        <input id="keterangan" name="keterangan" type="text" class="form-control" placeholder="Keterangan" value="<?= $tp['keterangan'] ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="fas fa-money-check-alt"></i>
                                        </span>
                                        <input name="keluar" id="masuk" type="text" class="form-control" placeholder="Jumlah pengeluaran" value="Rp <?= number_format(($tp['keluar']), 0, '', '.') ?>" required>
                                    </div>
                                </div>

                                <div class="form-group form-floating-label">
                                    <select id="lazis" name="lazis" class="form-control input-solid" id="selectFloatingLabel2" required>
                                        <option value="<?= $tp['lazis'] ?>" selected><?= $tp['lazis'] ?></option>
                                    </select>
                                    <label for="selectFloatingLabel2" class="placeholder">Jenis Lazis</label>
                                </div>

                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                        </form>
                    </div>
                </div>
                <script type="text/javascript">
                    var masuk = document.getElementById('masuk');
                    masuk.addEventListener('keyup', function(e) {
                        // tambahkan 'Rp.' pada saat form di ketik
                        // gunakan fungsi formatmasuk() untuk mengubah angka yang di ketik menjadi format angka
                        masuk.value = formatmasuk(this.value, 'Rp ');
                    });

                    /* Fungsi formatmasuk */
                    function formatmasuk(angka, prefix) {
                        var number_string = angka.replace(/[^,\d]/g, '').toString(),
                            split = number_string.split(','),
                            sisa = split[0].length % 3,
                            masuk = split[0].substr(0, sisa),
                            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                        // tambahkan titik jika yang di input sudah menjadi angka ribuan
                        if (ribuan) {
                            separator = sisa ? '.' : '';
                            masuk += separator + ribuan.join('.');
                        }

                        masuk = split[1] != undefined ? masuk + ',' + split[1] : masuk;
                        return prefix == undefined ? masuk : (masuk ? 'Rp ' + masuk : '');
                    }
                </script>
            </div>
        <?php endforeach; ?>
        <!-- end modal add -->