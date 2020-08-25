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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dataTables.bootsrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css">	 -->

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
						<!-- <li class="nav-item ">
							<a class="nav-link" href="<?= base_url('C_mudik/form'); ?>">Form Pemudik</a>
						</li> -->
						<li class="nav-item "><a class="nav-link" href="<?= base_url('C_mudik/list'); ?>">Terdaftar</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<div class="header-padding"></div>

	<section class="section pt-0 position-relative">
		<div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
			<div class="rounded-15 shadow bg-white">
				<div class="row justify-content-left">
					<div class="col-lg-12 col-md-12 mb-12 text-center p-4">

						<div style="margin-bottom:25px">
							<h3 class="font-hotline font-weight-bold p-0 mb-3">DATA PEMUDIK KABUPATEN KUDUS</h3>
						</div>
						<div class='table table-responsive font-hotline  p-0 mb-3'>
							<table id="data-tables" class="table table-bordered">
								<thead>
									<tr bgcolor="#dd2003" style="color:#fff; text-align:center">
										<th class="align-top" rowspan="2" scope="col">No</th>
										<th class="align-top" rowspan="2" scope="col" style="text-align: left !important">Nama</th>
										<th class="align-top" rowspan="2" scope="col" style="text-align: left !important">Kota Asal Pemudik</th>
										<!-- <th class="align-top" rowspan="2" scope="col">Status</th> -->
										<th class="align-top" colspan="3" scope="col">Tujuan Mudik</th>
									</tr>
									<tr bgcolor="#dd2003" style="color:#fff">
										<th>Tgl Datang</th>
										<th>Kecamatan</th>
										<th>Kel / Desa</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									$color = 0;
									foreach ($kecamatan as $k) {
										if($k['jenis']=='Asli'){
											$jenis="KTP KUDUS";
											}else{
											$jenis="Pendatang";
											}

										// $j += $k['jum'];
										if ($color == 1) {
											echo '<tr bgcolor="#f8f9fa">';
											$color = "2";
										} else {
											echo '<tr bgcolor="">';
											$color = "1";
										}
									?>
										<td scope="row"><?= $no++ ?></td>
										<td style="text-align: left !important"><?= $k['nama'] ?></td>
										<td style="width:250px;text-align: left !important"><?= $k['negara_asal_mudik'] ?>,&nbsp;<?= $k['kota_asal'] ?></td>
										<!-- <td><?= $jenis ?></td> -->
										<td><?= tgl_indo($k['waktu_kedatangan']) ?></td>
										<td><?= $k['kecamatan'] ?></td>
										<td><?= $k['desa'] ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
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
		<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>

</body>

</html>


<script>
    $(document).ready(function(){
        $('#data-tables').DataTable({
			"bPaginate": true,
			"bLengthChange": false,
			"bFilter": true,
			"bInfo": false,
			"bAutoWidth": true,
			
		});
    });
</script>