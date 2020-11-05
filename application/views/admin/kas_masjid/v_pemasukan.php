<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Pemasukan</h4>
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
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-credit-card text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Jumlah Infaq Masuk</p>
                                        <h4 class="card-title"><?= $infaq['clazis'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-credit-card-1 text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Jumlah Zakat Masuk</p>
                                        <h4 class="card-title"><?= $zakat['clazis'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-credit-card text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Jumlah Shadaqah Masuk</p>
                                        <h4 class="card-title"><?= $shadaqah['clazis'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-credit-card-1 text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-8 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Jumlah Wakaf Masuk</p>
                                        <h4 class="card-title"><?= $wakaf['clazis'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <p style="font-size: 20px;" class="card-category">Total Pemasukan</p>
                                        <h4 class="card-title">Rp <?= rupiah($totalpemasukan['tot_masuk']); ?></h4>
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
                            <div class="d-flex align-items-center">
                                <div class="card-title"><span><i class="fas fa-table"></i></span> Data Pemasukan</div>
                                <button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary btn-round ml-auto">
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
                                            <th>Keterangan</th>
                                            <th>Jumlah</th>
                                            <th>Jenis Lazis</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Jumlah</th>
                                            <th>Jenis Lazis</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($tampilpemasukan as $tp) : ?>
                                            <tr>
                                                <td>
                                                    <?= array_search($tp, $tampilpemasukan) + 1; ?>
                                                </td>
                                                <?php $tgl = $tp['tgl_km'] ?>
                                                <td><?= date("d-M-Y", strtotime($tgl)) ?></td>
                                                <td><?= $tp['keterangan']; ?></td>
                                                <td><?= "Rp " . rupiah($tp['masuk']); ?></td>
                                                <td><?= $tp['lazis']; ?></td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="<?= base_url('admin/kas_masjid/edit_kasmasuk/') . $tp['id']; ?>" data-toggle="tooltip" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?= base_url('admin/kas_masjid/delete_kasmasuk/') . $tp['id']; ?>" data-toggle="tooltip" class="btn btn-link btn-danger tombol-hapus" data-original-title="Hapus">
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
    </div>

    <!-- Modal Tambah Pemasukan-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content card">
                <div class="modal-header">
                    <h2 class="modal-title text-white" id="exampleModalCenterTitle">Tambah Pemasukan</h2>
                    <button style="color: tomato;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/kas_masjid/tambah_kas') ?>" method="POST">
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
                                <input name="masuk" id="masuk" type="text" class="form-control" placeholder="Jumlah Pemasukan" required>
                            </div>
                        </div>

                        <div class="form-group form-floating-label">
                            <select name="lazis" class="form-control input-solid" id="selectFloatingLabel2" required>
                                <option value="">&nbsp;</option>
                                <option>Infaq</option>
                                <option>Shadaqah</option>
                                <option>Wakaf</option>
                                <option>Zakat</option>

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