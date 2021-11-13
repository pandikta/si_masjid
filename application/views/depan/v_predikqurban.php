<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/img/about.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('home') ?>">Home <i class="fa fa-chevron-right"></i></a></span> <span>Qurban <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Hitung Paket Qurban</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="flash-saran" data-flashsaran="<?= $this->session->flashdata('message'); ?>"></div>
        <div class="flash-gagal" data-flashgagal="<?= $this->session->flashdata('flash'); ?>"></div>
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h3 class="mb-4">Prediksi Bobot Paket Qurban</h3>
            </div>
        </div>
        <div class="row block-1">
            <div class="col-md-12">
                <form action="<?= base_url('saran/tambah_saran') ?>" method="POST" class="p-4 p-md-5 contact-form">
                    <div class="row">

                        <div class="col-md-12">
                            <label for="" style="color: black; font-size:14px">Jumlah Sasaran Penerima</label>
                            <div class="form-group">
                                <input type="number" class="form-control" id="totalPenerima" placeholder="Jumlah Sasaran Penerima Daging Qurban" onkeyup="hitungQurban();" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="hargaSapi" placeholder="Harga 1 Sapi" onkeyup="hitungQurban();" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="number" class="form-control" id="jumlahSapi" placeholder="Banyaknya Kelompok Qurban" onkeyup="hitungQurban();" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="totalHargaSapi" placeholder="Total Harga Sapi" onkeyup="hitungQurban();" disabled>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="hargaKambing" placeholder="Harga 1 Kambing" onkeyup="hitungQurban();" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="number" class="form-control" id="totalKambing" placeholder="Banyaknya Kambing" onkeyup="hitungQurban();" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="totalHargaKambing" placeholder="Total Harga Kambing" onkeyup="hitungQurban();" disabled>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="" style="color: black; font-size:14px">Total Harga Sapi dan Kambing</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="totalRupiah" placeholder="Total Harga Sapi + Kambing" disabled>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="" style="color: black; font-size:14px">Hak Sohibul</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="hakSohibul" placeholder="Hak Sohibul" disabled>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="" style="color: black; font-size:14px">Setelah diambil Hak Sohibul</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="sisaRupiah" placeholder="Sisa (Rupiah) setelah diambil hak sohibul" disabled>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="" style="color: black; font-size:14px">Total Uang Dibagi Penerima</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="totalRupiahSetelahDiambilSohibul" placeholder="Jumlah Rupiah Qurban (setelah diambil hak sohibul) / Jumlah penerima" disabled>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="" style="color: black; font-size:14px">Asumsi Harga Rata2 Daging Sapi / Kambing Per Kg dipasaran </label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="asumsiHarga" placeholder="Asumsi Harga Rata2 Daging Sapi / Kambing Per Kg dipasaran" onkeyup="hitungQurban();" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="" style="color: red;">Konversi dari Harga Daging ke Dalam Satuan Kg</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="konversi" placeholder="Konversi dari Harga Daging ke Dalam Satuan Kg" onkeyup="hitungQurban();" disabled>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="" style="color: red;">Kesimpulan : 1 Paket Daging Isinya adalah</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="hasil" placeholder="Kesimpulan : 1 Paket Daging Isinya adalah" onkeyup="hitungQurban();" disabled>
                            </div>
                        </div>

                    </div>
                </form>

            </div>


        </div>
    </div>
</section>

<script>
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
</script>