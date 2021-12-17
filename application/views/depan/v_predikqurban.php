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
<div class="container-fluid" id="grad1">
	<div class="row justify-content-center mt-0">
		<div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
			<div class="card px-0 pt-4 pb-0 mt-3 mb-3">
				<h2><strong>Sign Up Your User Account</strong></h2>
				<p>Fill all form field to go to next step</p>
				<div class="row">
					<div class="col-md-12 mx-0">
						<form id="msform">
							<!-- progressbar -->
							<ul id="progressbar">
								<li class="active" id="account"><strong>Account</strong></li>
								<li id="personal"><strong>Personal</strong></li>
								<li id="payment"><strong>Payment</strong></li>
								<li id="confirm"><strong>Finish</strong></li>
							</ul> <!-- fieldsets -->
							<fieldset>
								<div class="form-card">
									<div class="col-md-12 row justify-content-start">
										<div class="form-group">
											<input type="button" value="Tambah Sapi Pribadi" name="add" id="add" class="btn btn-success py-2 px-3">
										</div>
										<div class="form-group ml-2">
											<input type="button" value="Tambah Sapi Panitia" name="add2" id="add2" class="btn btn-success py-2 px-3">
										</div>
									</div>
									<div class="form-group">
										<table id="dynamic_field">
											<tr id="row">
												<td class="col-md-6">
													<input type="text" name="harga[]" id="harga" class="form-control" placeholder="Harga Pasaran Sapi" required>
												</td>
											</tr>
										</table>
									</div>
									<hr>
									<div class="form-group">
										<table id="dynamic_field2">
											<tr id="row2">
												<td class="col-md-6">
													<input type="text" name="harga_panitia[]" id="harga_panitia" class="form-control" placeholder="Harga Pasaran Sapi" required>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<input onclick="process()" type="button" name="next" class="next action-button" value="Next Step" />
							</fieldset>
							<fieldset>
								<div class="form-card">
									<h5 class="ml-3">
										Harga Pribadi
									</h5>
									<table id="dynamic_field3">

									</table>
									<br>
									<h5 class="ml-3">
										Harga Panitia
									</h5>
									<table id="dynamic_field4">

									</table>
								</div>
								<input type="button" name="previous" class="previous action-button-previous" value="Previous" />
								<input onclick="berat()" type="button" name="next" class="next action-button" value="Next Step" />
							</fieldset>
							<fieldset>
								<div class="form-card">
									<h2 class="fs-title">Payment Information</h2>
									<div class="radio-group">
										<div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
										<div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div> <br>
									</div> <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
									<div class="row">
										<div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
										<div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
									</div>
									<div class="row">
										<div class="col-3"> <label class="pay">Expiry Date*</label> </div>
										<div class="col-9"> <select class="list-dt" id="month" name="expmonth">
												<option selected>Month</option>
												<option>January</option>
												<option>February</option>
												<option>March</option>
												<option>April</option>
												<option>May</option>
												<option>June</option>
												<option>July</option>
												<option>August</option>
												<option>September</option>
												<option>October</option>
												<option>November</option>
												<option>December</option>
											</select> <select class="list-dt" id="year" name="expyear">
												<option selected>Year</option>
											</select> </div>
									</div>
								</div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
							</fieldset>
							<fieldset>
								<div class="form-card">
									<h2 class="fs-title text-center">Success !</h2> <br><br>
									<div class="row justify-content-center">
										<div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
									</div> <br><br>
									<div class="row justify-content-center">
										<div class="col-7 text-center">
											<h5>You Have Successfully Signed Up</h5>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
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
										<a class="nav-link active">Harga</a>
									</li>
									<li class="nav-item">
										<a class="nav-link">Sapi & Lulang</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled">Kambing </a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled">Hasil </a>
									</li>
								</ul>
							</div>
							<div class="card-body">
								<!-- <h5 class="card-title">Special title treatment</h5> -->
								<form action="<?= base_url('kurban/tambah_berat') ?>" method="POST" class="p-4 p-md-5 contact-form">
									<div class="form-group">
										<table id="dynamic_field">
											<tr id="row">
												<td class="col-md-6">
													<input type="text" name="harga[]" class="form-control" placeholder="Harga Pasaran Sapi" required>
												</td>
											</tr>
										</table>
									</div>
									<hr>
									<div class="form-group">
										<table id="dynamic_field2">
											<tr id="row2">
												<td class="col-md-6">
													<input type="text" name="harga_panitia[]" class="form-control" placeholder="Harga Pasaran Sapi" required>
												</td>
											</tr>
										</table>
									</div>
									<div class=" col-md-12">
										<div class="form-group">
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
	let arr_harga = new Array()
	let arr_harga_panitia = new Array()

	let arr_karkas = new Array()
	let arr_karkas_panitia = new Array()

	let arr_karkas_bagi = new Array()
	let arr_karkas_panitia_bagi = new Array()


	function process() {
		let harga = document.querySelectorAll('[id="harga"]');
		let harga_panitia = document.querySelectorAll('[id="harga_panitia"]');
		arr_harga = [...harga].map(input => input.value);
		arr_harga_panitia = [...harga_panitia].map(input => input.value);
	}

	function berat() {
		let karkas = document.querySelectorAll('[id="karkas"]');
		arr_karkas = [...karkas].map(input => input.value);
		arr_karkas_bagi = [...arr_karkas].map(function(num) {
			return (num / 3).toFixed(2)
		});

		let karkas_panitia = document.querySelectorAll('[id="karkas_panitia"]');
		arr_karkas_panitia = [...karkas_panitia].map(input => input.value);
		console.log(arr_karkas)
		arr_karkas_panitia_bagi = [...arr_karkas_panitia].map(function(num) {
			return (num / 3).toFixed(2)
		});
		console.log('hasil bagi karkas ', arr_karkas_bagi)
		console.log('hasil bagi karkas panitia', arr_karkas_panitia_bagi)
	}
	$(document).ready(function() {

		var current_fs, next_fs, previous_fs; //fieldsets
		var opacity;

		$(".next").click(function() {

			current_fs = $(this).parent();
			next_fs = $(this).parent().next();

			//Add Class Active
			$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

			//show the next fieldset
			next_fs.show();
			//hide the current fieldset with style
			current_fs.animate({
				opacity: 0
			}, {
				step: function(now) {
					// for making fielset appear animation
					opacity = 1 - now;

					current_fs.css({
						'display': 'none',
						'position': 'relative'
					});
					next_fs.css({
						'opacity': opacity
					});
				},
				duration: 600
			});
			for (let index = 0; index < arr_harga.length; index++) {
				console.log()
				$('#dynamic_field3').append('<tr id="row"><td class="col-md-4"><input type="text" class="form-control" placeholder="Harga Pasaran Sapi" value="' + arr_harga[index] + '" readonly></td><td class="col-md-3"><input type="text" id="karkas" class="form-control" placeholder="Berat Karkas"></td><td class="col-md-3"><input type="text" id="lulang" class="form-control" placeholder="Lulang"></td></tr>');
			}
			for (let index = 0; index < arr_harga_panitia.length; index++) {

				$('#dynamic_field4').append('<tr id="row"><td class="col-md-4"><input type="text" class="form-control" placeholder="Harga Pasaran Sapi" value="' + arr_harga_panitia[index] + '" readonly></td><td class="col-md-3"><input type="text" class="form-control" id="karkas_panitia" placeholder="Berat Karkas"></td><td class="col-md-3"><input type="text" class="form-control" id="lulang_panitia" placeholder="Lulang"></td></tr>');

			}
		});

		$(".previous").click(function() {

			current_fs = $(this).parent();
			previous_fs = $(this).parent().prev();

			//Remove class active
			$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

			//show the previous fieldset
			previous_fs.show();

			//hide the current fieldset with style
			current_fs.animate({
				opacity: 0
			}, {
				step: function(now) {
					// for making fielset appear animation
					opacity = 1 - now;

					current_fs.css({
						'display': 'none',
						'position': 'relative'
					});
					previous_fs.css({
						'opacity': opacity
					});
				},
				duration: 600
			});
		});

		$('.radio-group .radio').click(function() {
			$(this).parent().find('.radio').removeClass('selected');
			$(this).addClass('selected');
		});

		$(".submit").click(function() {
			return false;
		})

		$('#smartwizard').smartWizard({
			selected: 0,
			theme: 'dots',
			autoAdjustHeight: true,
			transitionEffect: 'fade',
			showStepURLhash: false,

		});
		var i = 1;
		$('#add').click(function() {
			i++;
			$('#dynamic_field').append(' <tr id="row' + i + '"><td class="col-md-6"><input type="text" name="harga[]" id="harga" class="form-control"  placeholder="Harga Pasaran Sapi" required ></td><td class="col-md-1"><button type="button" name="remove" class=" btn btn-danger btn_remove   " id="' + i + '" value="X" >X</button></td></tr>');
		});

		$(document).on('click', '.btn_remove', function() {
			var button_id = $(this).attr("id");
			$('#row' + button_id + '').remove();

		});
		var a = 1;
		$('#add2').click(function() {
			a++;
			$('#dynamic_field2').append(' <tr id="row2' + a + '"><td class="col-md-6"><input type="text" name="harga_panitia[]" id="harga_panitia" class="form-control" placeholder="Harga Pasaran Sapi" required></td><td class="col-md-1"><button type="button" name="remove2" class=" btn btn-danger btn_remove2   " id="' + a + '" value="X" >X</button></td></tr>');
		});

		$(document).on('click', '.btn_remove2', function() {
			var button_id = $(this).attr("id");
			$('#row2' + button_id + '').remove();

		});


	});
</script>
<style>
	#grad1 {
		background-color: : #9C27B0;
		background-image: linear-gradient(120deg, #FF4081, #81D4FA)
	}

	#msform {
		text-align: center;
		position: relative;
		margin-top: 20px
	}

	#msform fieldset .form-card {
		background: white;
		border: 0 none;
		border-radius: 0px;
		box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
		padding: 20px 40px 30px 40px;
		box-sizing: border-box;
		width: 94%;
		margin: 0 3% 20px 3%;
		position: relative
	}

	#msform fieldset {
		background: white;
		border: 0 none;
		border-radius: 0.5rem;
		box-sizing: border-box;
		width: 100%;
		margin: 0;
		padding-bottom: 20px;
		position: relative
	}

	#msform fieldset:not(:first-of-type) {
		display: none
	}

	#msform fieldset .form-card {
		text-align: left;
		color: #9E9E9E
	}

	#msform input,
	#msform textarea {
		padding: 0px 8px 4px 8px;
		border: none;
		border-bottom: 1px solid #ccc;
		border-radius: 0px;
		margin-bottom: 25px;
		margin-top: 2px;
		width: 100%;
		box-sizing: border-box;
		color: #2C3E50;
		font-size: 16px;
		letter-spacing: 1px
	}

	#msform input:focus,
	#msform textarea:focus {
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		box-shadow: none !important;
		border: none;
		font-weight: bold;
		border-bottom: 2px solid skyblue;
		outline-width: 0
	}

	#msform .action-button {
		width: 100px;
		background: skyblue;
		font-weight: bold;
		color: white;
		border: 0 none;
		border-radius: 0px;
		cursor: pointer;
		padding: 10px 5px;
		margin: 10px 5px
	}

	#msform .action-button:hover,
	#msform .action-button:focus {
		box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
	}

	#msform .action-button-previous {
		width: 100px;
		background: #616161;
		font-weight: bold;
		color: white;
		border: 0 none;
		border-radius: 0px;
		cursor: pointer;
		padding: 10px 5px;
		margin: 10px 5px
	}

	#msform .action-button-previous:hover,
	#msform .action-button-previous:focus {
		box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
	}

	select.list-dt {
		border: none;
		outline: 0;
		border-bottom: 1px solid #ccc;
		padding: 2px 5px 3px 5px;
		margin: 2px
	}

	select.list-dt:focus {
		border-bottom: 2px solid skyblue
	}

	.card {
		z-index: 0;
		border: none;
		border-radius: 0.5rem;
		position: relative
	}

	.fs-title {
		font-size: 25px;
		color: #2C3E50;
		margin-bottom: 10px;
		font-weight: bold;
		text-align: left
	}

	#progressbar {
		margin-bottom: 30px;
		overflow: hidden;
		color: lightgrey
	}

	#progressbar .active {
		color: #000000
	}

	#progressbar li {
		list-style-type: none;
		font-size: 12px;
		width: 25%;
		float: left;
		position: relative
	}

	#progressbar #account:before {
		font-family: FontAwesome;
		content: "\f023"
	}

	#progressbar #personal:before {
		font-family: FontAwesome;
		content: "\f007"
	}

	#progressbar #payment:before {
		font-family: FontAwesome;
		content: "\f09d"
	}

	#progressbar #confirm:before {
		font-family: FontAwesome;
		content: "\f00c"
	}

	#progressbar li:before {
		width: 50px;
		height: 50px;
		line-height: 45px;
		display: block;
		font-size: 18px;
		color: #ffffff;
		background: lightgray;
		border-radius: 50%;
		margin: 0 auto 10px auto;
		padding: 2px
	}

	#progressbar li:after {
		content: '';
		width: 100%;
		height: 2px;
		background: lightgray;
		position: absolute;
		left: 0;
		top: 25px;
		z-index: -1
	}

	#progressbar li.active:before,
	#progressbar li.active:after {
		background: skyblue
	}

	.radio-group {
		position: relative;
		margin-bottom: 25px
	}

	.radio {
		display: inline-block;
		width: 204;
		height: 104;
		border-radius: 0;
		background: lightblue;
		box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
		box-sizing: border-box;
		cursor: pointer;
		margin: 8px 2px
	}

	.radio:hover {
		box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
	}

	.radio.selected {
		box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
	}

	.fit-image {
		width: 100%;
		object-fit: cover
	}
</style>
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
