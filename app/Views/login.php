<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
	<meta name="author" content="Coderthemes">

	<link rel="shortcut icon" href="assets/images/favicon_1.ico">

	<title><?= $title; ?></title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/core.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/components.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

	<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

	<script src="assets/js/modernizr.min.js"></script>

</head>

<body>

	<div class="account-pages"></div>
	<div class="clearfix"></div>
	<div class="wrapper-page">
		<div class=" card-box">
			<div class="panel-heading">
				<h3 class="text-center"> Silahkan Masuk <br> <strong class="text-custom">Sistem Informasi Pensiun Pegawai</strong> </h3>
			</div>
			<div class="panel-body">
				<?php if (session()->getFlashdata('pesan')) : ?>
					<div class="alert alert-warning" style="text-align: center;">
						<strong> <?= session()->getFlashdata('pesan'); ?></strong>
					</div>
				<?php endif; ?>

				<form class="form-horizontal m-t-20" method="post" action="/auth/validasi">

					<div class="form-group ">
						<div class="col-xs-12">
							<input class="form-control" name="username" type="text" required="" autofocus placeholder="Username">
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-12">
							<input class="form-control" name="password" type="password" required="" placeholder="Password">
						</div>
					</div>

					<div class="form-group text-center m-t-40">
						<div class="col-xs-12">
							<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">Login</button>
						</div>
					</div>
				</form>

			</div>
		</div>
		<!-- <div class="row">
			<div class="col-sm-12 text-center">
				<p>Belum Punya Akun ? <a href="/register" class="text-primary m-l-5"><b>Daftar</b></a></p>

			</div>
		</div> -->
	</div>




	<script>
		var resizefunc = [];
	</script>

	<!-- jQuery  -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/detect.js"></script>
	<script src="assets/js/fastclick.js"></script>
	<script src="assets/js/jquery.slimscroll.js"></script>
	<script src="assets/js/jquery.blockUI.js"></script>
	<script src="assets/js/waves.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/jquery.nicescroll.js"></script>
	<script src="assets/js/jquery.scrollTo.min.js"></script>


	<script src="assets/js/jquery.core.js"></script>
	<script src="assets/js/jquery.app.js"></script>

</body>

</html>