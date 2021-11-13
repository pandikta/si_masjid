<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Hitung Paket Qurban</h4>
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
                        <!-- <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="card-title d-md-flex"><span><i class="fas fa-table"></i></span> Data pengajian</div>
                                <button data-toggle="modal" onclick="tambahPengajian()" data-target="#modal_form" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </button>

                            </div>
                        </div> -->
                        <div class="card-body">
                            <div class="form-group form-inline">
                                <label for="inlineinput" class="col-md-4">Jumlah Sasaran Penerima Daging Qurban</label>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="totalPenerima" onkeyup="hitungQurban();" placeholder="Enter Input">
                                </div>
                                <label for="" style="margin-left: 10px; margin-right:10px;">Orang / Paket</label>
                            </div>

                            <div class="form-group form-inline">
                                <label for="inlineinput" class="col-md-4">Harga 1 Sapi Berdasarkan iuran anggota ( Kelompok Qurban ) x Jumlah Sapi</label>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="hargaSapi" onkeyup="hitungQurban();" placeholder="Enter Input">
                                </div>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="jumlahSapi" onkeyup="hitungQurban();" placeholder="Enter Input">
                                </div>
                                <label for="" style="margin-left: 10px; margin-right:10px;">=</label>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="totalHargaSapi" onkeyup="hitungQurban();" placeholder="Enter Input">
                                </div>
                            </div>

                            <div class="form-group form-inline">
                                <label for="inlineinput" class="col-md-4">Total Harga Kambing (Harga Kambing x Total kambing)</label>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="hargaKambing" onkeyup="hitungQurban();" placeholder="Enter Input">
                                </div>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="totalKambing" onkeyup="hitungQurban();" placeholder="Enter Input">
                                </div>
                                <label for="" style="margin-left: 10px; margin-right:10px;">=</label>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="totalHargaKambing" onkeyup="hitungQurban();" placeholder="Enter Input">
                                </div>
                            </div>

                            <div class="form-group form-inline">
                                <label for="inlineinput" class="col-md-4">Total Harga Sapi dan Kambing</label>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="totalRupiah" onkeyup="hitungQurban();" placeholder="Enter Input">
                                </div>
                            </div>
                            <hr style="background-color: white;">
                            <div class="form-group form-inline">
                                <label for="inlineinput" class="col-md-4">Hak Sohibul</label>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="hakSohibul" placeholder="Enter Input">
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label for="inlineinput" class="col-md-4">Sisa (Rupiah) setelah diambil hak sohibul </label>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="sisaRupiah" placeholder="Enter Input">
                                </div>
                            </div>
                            <hr style="background-color: white;">
                            <div class="form-group form-inline">
                                <label for="inlineinput" class="col-md-4">Jumlah Rupiah Qurban (setelah diambil hak sohibul) / Jumlah penerima </label>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="totalRupiahSetelahDiambilSohibul" placeholder="Enter Input">
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label for="inlineinput" class="col-md-4">Asumsi Harga Rata2 Daging Sapi / Kambing Per Kg dipasaran </label>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="asumsiHarga" onkeyup="hitungQurban();" placeholder="Enter Input">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group form-inline">
                                <label for="inlineinput" class="col-md-4 ">Konversi dari Harga Daging ke Dalam Satuan Kg</label>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="konversi" onkeyup="hitungQurban();" placeholder="Enter Input">
                                </div>
                                <label for="" style="margin-left: 10px; margin-right:10px;">Kg / Paket</label>
                            </div>
                            <div class="form-group form-inline">
                                <label for="inlineinput" class="col-md-4">Kesimpulan : 1 Paket Daging Isinya adalah</label>
                                <div class="col-md-1 p-0">
                                    <input type="text" class="form-control input-full" id="hasil" onkeyup="hitungQurban();" placeholder="Enter Input">
                                </div>
                                <label for="" style="margin-left: 10px; margin-right:10px;">Kg</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                document.getElementById('konversi').value = konversi.toFixed(2);
                document.getElementById('hasil').value = konversi.toFixed(2);
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
    </script>