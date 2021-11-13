<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/about.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('home') ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Dana <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Dana</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="flash-saran" data-flashsaran="<?= $this->session->flashdata('message'); ?>"></div>
        <div class="flash-gagal" data-flashgagal="<?= $this->session->flashdata('flash'); ?>"></div>
        <div class="row justify-content-center mb-2 px-1 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-2">Rekapitulasi Dana Bulan <br> <?= date('F') . ' ' .  date('Y') ?></h2>
                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
            </div>
        </div>
        <div class="row block-9">
            <table class="table table-dark ftco-animate">
                <thead>
                    <tr>
                        <th scope="">No</th>
                        <td>Tanggal</td>
                        <td>Keterangan</td>
                        <td>Pemasukan</td>
                        <td>Pengeluaran</td>
                        <td>Lazis</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rekap as $t) : ?>
                        <tr>
                            <td><?= array_search($t, $rekap) + 1 ?></td>
                            <td><?= $t['tgl_km']; ?></td>
                            <td><?= $t['keterangan']; ?></td>
                            <td><?= "Rp " . rupiah($t['masuk']); ?></td>
                            <td><?= "Rp " . rupiah($t['keluar']); ?></td>
                            <td><?= $t['lazis']; ?></td>

                        <?php endforeach ?>
                </tbody>
                <tr>
                    <td colspan="5">Total Pemasukan</td>
                    <td colspan="0" align="right"><?= "Rp " . rupiah($totmasuk['tot_masuk']); ?></td>
                </tr>
                <tr>
                    <td colspan="5">Total Pengeluaran</td>
                    <td colspan="0" align="right"><?= "Rp " . rupiah($totkeluar['tot_keluar']); ?></td>
                </tr>
                <tr>
                    <td colspan="5">Total Saldo</td>
                    <td colspan="0" align="right"><?= "Rp " . rupiah($total['saldo']); ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>