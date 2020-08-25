<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Admin</title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php base_url(); ?>assets/kds.png">
	<link rel="apple-touch-icon" href="<?php echo base_url() ?>template/apple-icon.png">
	<link rel="shortcut icon" href="<?php echo base_url() ?>template/favicon.ico">

	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/normalize.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/flag-icon.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/cs-skin-elastic.css">
	<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/scss/style.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	<style>
		.login-form {
			-moz-box-shadow: 2px 0 20px #888;
			-webkit-box-shadow: 2px 0 20px #888;
			box-shadow: 2px 0 20px #888;
		}
	</style>
	<style type="text/css">
		img.bg {
			min-height: 100%;
			min-width: 1024px;
			width: 100%;
			height: auto;
			position: fixed;
			top: 0;
			left: 0;
		}

		@media screen and (max-width: 1024px) {
			img.bg {
				left: 50%;
				margin-left: -512px;
				/* 50% */
			}
		}

		.content {
			position: relative;
			z-index: 2;
			width: 400px;
			margin: 1px auto;
			padding: 20px;
		}
	</style>
</head>

<body>
	<img src="<?= base_url('assets/bg-2.png') ?>" class="bg">
	<div class="sufee-login d-flex align-content-left flex-wrap">
		<div class="container content">
			<div class="login-content">
				<div class="login-form">
					<div class="social-login-content">
						<h2 align="center">
							<img src="https://i.pinimg.com/originals/61/7c/08/617c08db66249363967838302881b351.png" alt="" width="50px">
							LOGIN ADMIN</h2>
					</div>
					<div class="form-group has-feedback text-danger" id="notif">
						<?php echo $this->session->flashdata('error') ?>
					</div>
					<?php $frm_login = array('onsubmit' => 'return validasi(this)');
					echo form_open('auth/cek_login', $frm_login); ?>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" placeholder="Username" autofocus="autofocus" autocomplete="off">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
					</div>
					<div class="checkbox">
						<label><a href="<?php echo base_url('') ?>" target="_blank">
								<span style="color:#28a745" class="fa fa-external-link fa-lg"></span></a>
						</label>
						<label class="pull-right">
							<a class="remove">Forgotten Password?</a>
						</label>
					</div>
					<button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Log in</button>

					<div class="register-link m-t-15 text-center"><br>
						<!-- <p>Aplikasi Agenda Kegiatan OPD</p> -->
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
	<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
	<script src="<?php echo base_url() ?>template/assets/js/vendor/jquery-2.1.4.min.js"></script>
	<script type="text/javascript">
		$(".remove").click(function() {

			swal({
				title: "Opss!",
				text: "Silahkan hubungi admin untuk mendapatkan akun pemulihan baru",
				type: "warning",
				showCancelButton: false,
				confirmButtonClass: "btn-primary",
				confirmButtonText: "",
				cancelButtonText: "TUTUP!",
				closeOnConfirm: false,
				closeOnCancel: true
			});
		});
	</script>
	<script>
		$('#notif').slideDown('slow').delay(4000).slideUp('slow');
	</script>
	<script type="text/javascript">
		function validasi(form) {
			if (form.username.value == "") {
				alert("Username masih kosong");
				form.username.focus();
				return (false);
			}
			if (form.password.value == "") {
				alert("Password masih kosong");
				form.password.focus();
				return (false);
			}
			return (true);
		}
	</script>
</body>

</html>
