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

	<script>
		var PATH = 'http://mudik.kuduskab.go.id';
	</script>
</head>

<body>

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
						<li class="nav-item ">
							<a class="nav-link" href="<?= base_url('C_mudik/form'); ?>">Form Pemudik</a>
						</li>
						<li class="nav-item "><a class="nav-link" href="<?= base_url('C_mudik/list'); ?>">Terdaftar</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<div class="header-padding"></div>

	<div class="container">
		<div class="rounded-15 shadow bg-white">
			<div class="card-body">
				<h1>DATA PEMUDIK KABUPATEN KUDUS</h1><br>
				

				<section class="section pt-0 position-relative">
					<div class="container-fluid" style="color:black">
						<div class="row justify-content-center">
							<div class="col-12 col-md-8">
								<div class="rounded-15 shadow bg-white">
									<div class="carda" style="padding: 15px;">
										<div class="row justify-content-left">
											<div class="card-body">
												
												<form action="<?php echo base_url('C_public/hasil'); ?>" class="form-group" method="POST">
												<div>
													<div class="form-group">
													<input type="search" name="nik" class="form-control" placeholder="Pencarian Berdasarkan NIK" style="height: 60px;">
													<input type="submit" value="Cari" name="submit" class="btn btn-danger" style="height: 60px; width:95px">
												</div>
											</form>
											</div>
											
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>


				<div class="rounded-15 shadow bg-white table-responsive">
					<table class="table table-bordered">
						<tr>
							<th>NIK</th>
							<th>Nama</th>
							<th>JK</th>
							<th>Tgl Lahir</th>
						</tr>
						<?php foreach ($data['content'] as $k) { ?>
							<tr>

								<td><?= @$k['NIK'] ?></td>
								<td><?= @$k['NAMA_LGKP'] ?></td>
								<td><?= @$k['JENIS_KLMIN'] ?></td>
								<td><?= tgl_indo(@$k['TGL_LHR']) ?></td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>

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
</body>

</html>