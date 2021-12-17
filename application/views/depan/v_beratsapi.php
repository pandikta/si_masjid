<!-- <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/about.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('home') ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Qurban <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Hitung Paket Qurban</h1>
            </div>
        </div>
    </div>
</section> -->

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <?php
    // print_r($harga);
    // print_r($harga_panitia);

    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-12 py-5 pl-md-5">
                <div class="row justify-content-center mb-4 pt-md-4">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h3 class="mb-4">Prediksi Bobot Paket Qurban</h3>
                    </div>
                    <div class="col-md-12 heading-section ftco-animate">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link ">Harga</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active">Sapi & Lulang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">Kambing </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">Hasil </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <!-- <h5 class="card-title">Special title treatment</h5> -->
                                <!-- <div class="col-md-12 row justify-content-start">
                                    <div class="form-group">
                                        <input type="button" value="Tambah Sapi Panitia" name="add" id="add" class="btn btn-success py-2 px-3">
                                    </div>
                                    <div class="form-group ml-2">
                                        <input type="button" value="Tambah Sapi Pribadi" name="add2" id="add2" class="btn btn-success py-2 px-3">
                                    </div>
                                </div> -->

                                <form action="<?= base_url('saran/tambah_saran') ?>" method="POST" class="p-4 p-md-5 contact-form">
                                    <div class="form-group">
                                        <table id="dynamic_field">
                                            <?php foreach ($harga as $h) :
                                            ?>
                                                <tr id="row">
                                                    <td class="col-md-4">
                                                        <input type="text" class="form-control" placeholder="Harga Pasaran Sapi" value="<?= $h ?>" readonly>
                                                    </td>
                                                    <td class="col-md-3">
                                                        <input type="text" class="form-control" placeholder="Berat Karkas">
                                                    </td>
                                                    <td class="col-md-3">
                                                        <input type="text" class="form-control" placeholder="Lulang">
                                                    </td>
                                                </tr>
                                            <?php endforeach;
                                            ?>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <table id="dynamic_field2">
                                            <?php foreach ($harga_panitia as $hp) :
                                            ?>
                                                <tr id="row">
                                                    <td class="col-md-4">
                                                        <input type="text" class="form-control" placeholder="Harga Pasaran Sapi" value="<?= $hp ?>" readonly>
                                                    </td>
                                                    <td class="col-md-3">
                                                        <input type="text" class="form-control" placeholder="Berat Karkas">
                                                    </td>
                                                    <td class="col-md-3">
                                                        <input type="text" class="form-control" placeholder="Lulang">
                                                    </td>
                                                </tr>
                                            <?php endforeach;
                                            ?>
                                        </table>
                                    </div>
                                    <div class="row col-md-12">
                                        <div class="form-group">
                                            <a value="Kembali" href="<?= base_url('kurban') ?>" class="btn btn-danger d-flex justify-content-start text-white">Kembali</a>
                                        </div>
                                        <div class="form-group ml-2">
                                            <input type="submit" value="Proses" class="btn btn-primary d-flex justify-content-start">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append(' <tr id="row' + i + '"><td class="col-md-6"><input type="text" class="form-control"  placeholder="Harga Pasaran Sapi" ></td><td class="col-md-1"><button type="button" name="remove" class=" btn btn-danger btn_remove   " id="' + i + '" value="X" >X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();

        });

    });
</script>
<script>
    $(document).ready(function() {
        var i = 1;
        $('#add2').click(function() {
            i++;
            $('#dynamic_field2').append(' <tr id="row2' + i + '"><td class="col-md-6"><input type="text" class="form-control" placeholder="Harga Pasaran Sapi" ></td><td class="col-md-1"><button type="button" name="remove2" class=" btn btn-danger btn_remove2   " id="' + i + '" value="X" >X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove2', function() {
            var button_id = $(this).attr("id");
            $('#row2' + button_id + '').remove();

        });

    });
</script>

<!-- <script>
    function hitungQurban() {

        var totalPenerima = document.getElementById('totalPenerima').value;
        var hargaSapi = document.getElementById('hargaSapi').value;
        var jumlahSapi = document.getElementById('jumlahSapi').value;

        var hargaKambing = document.getElementById('hargaKambing').value;
        var totalKambing = document.getElementById('totalKambing').value;

        var totalHargaSapi = parseFloat(hargaSapi.replace(/[^0-9]/g, '')) * parseFloat(jumlahSapi);
        var totalHargaKambing = parseFloat(hargaKambing.replace(/[^0-9]/g, '')) * parseFloat(totalKambing);

        var totalRupiah = parseFloat(totalHargaSapi) + parseFloat(totalHargaKambing);
        var hakSohibul = 1 / 3 * parseFloat(totalRupiah);
        var sisaRupiah = parseFloat(totalRupiah) - parseFloat(hakSohibul);

        var totalRupiahSetelahDiambilSohibul = parseFloat(sisaRupiah) / parseFloat(totalPenerima);
        var asumsiHarga = document.getElementById('asumsiHarga').value;

        var konversi = parseFloat(totalRupiahSetelahDiambilSohibul) / parseFloat(asumsiHarga.replace(/[^0-9]/g, ''));

        if (!isNaN(totalHargaSapi) || !isNaN(totalHargaKambing) || !isNaN(totalRupiah) || !isNaN(hakSohibul) || !isNaN(sisaRupiah) || !isNaN(totalRupiahSetelahDiambilSohibul) || !isNaN(konversi)) {
            document.getElementById('totalHargaSapi').value = convertToRupiah(totalHargaSapi);
            document.getElementById('totalHargaKambing').value = convertToRupiah(totalHargaKambing);
            document.getElementById('totalRupiah').value = convertToRupiah(totalRupiah);
            document.getElementById('hakSohibul').value = convertToRupiah(parseInt(hakSohibul));
            document.getElementById('sisaRupiah').value = convertToRupiah(parseInt(sisaRupiah));
            document.getElementById('totalRupiahSetelahDiambilSohibul').value = convertToRupiah(parseInt(totalRupiahSetelahDiambilSohibul));
            document.getElementById('konversi').value = convertToKg(konversi.toFixed(2));
            document.getElementById('hasil').value = convertToKg(konversi.toFixed(2));
        }

    }
</script>
<script type="text/javascript">
    var hargaSapi = document.getElementById('hargaSapi');
    hargaSapi.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        hargaSapi.value = formatRupiah(this.value, 'Rp. ');
    });

    var totalHargaSapi = document.getElementById('totalHargaSapi');
    totalHargaSapi.addEventListener('submit', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        totalHargaSapi.value = formatRupiah(this.value, 'Rp. ');
    });

    var hargaKambing = document.getElementById('hargaKambing');
    hargaKambing.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        hargaKambing.value = formatRupiah(this.value, 'Rp. ');
    });

    var asumsiHarga = document.getElementById('asumsiHarga');
    asumsiHarga.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        asumsiHarga.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    function convertToRupiah(angka) {
        var rupiah = '';
        var angkarev = angka.toString().split('').reverse().join('');
        for (var i = 0; i < angkarev.length; i++)
            if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
        return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
    }

    function convertToKg(angka) {
        // var kg = '';
        var angkarev = angka.toString();

        return angkarev + ' Kg';
    }
</script> -->