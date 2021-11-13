<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Rekap</h4>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group form-inline">
                                        <form class="form-group" method="POST" action="<?= base_url('admin/kas_masjid/print_kasperiode') ?>">
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
                                <button type="submit" class="btn btn-primary" target="_blank">Cetak Periode</button>
                                <a href="<?= base_url('admin/kas_masjid/print_kas') ?>" class="btn btn-info text-white" target="_blank">Cetak Semua</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>