<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/about.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('home') ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Jadwal Petugas Jumat <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Jadwal Petugas Jumat</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-1 py-5">

        <div class="container">
            <h2 class="text-center ">Jadwal Jumat Bulan <?= date('F Y'); ?></h2>
            <table class="table">
                <thead class="table table-striped table-dark">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Imam</th>
                        <th>Khotib</th>
                        <th>Muadzin</th>
                    </tr>
                </thead>
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
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


    </div>
</section>