<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Clungup Mangrove Conservation</title>
	<!-- Loading third party fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,700" rel="stylesheet"
		type="text/css">
	<link href="<?= base_url("assets/fonts/font-awesome.min.css")?>" rel="stylesheet" type="text/css">
	<!-- Loading main css file -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url("assets/css/animate.min.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/style.css") ?>">

	<!-- pkoknya ini tekku -->
	<link rel="stylesheet" type="text/css"
		href="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
	<!-- Timepicker -->
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/timepicker/css/bootstrap-timepicker.min.css") ?>">

	<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

</head>

<body>

	<div id="site-content">
		<header class="site-header wow fadeInDown">
			<div class="container">
				<div class="header-content">
					<div class="branding">
						<a href="<?= base_url("home")?>"><img src="<?= base_url("assets/images/logo.png")?>"
								alt="Company Name" class="logo" width="120dp"></a>
					</div>
					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="<?= base_url("home/about_us") ?>">About us</a></li>
							<li class="menu-item"><a href="<?= base_url("home/map") ?>">Map & Weather</a></li>
							<!-- Link Booking ngenteni alfi -->
							<li class="menu-item"><a href="<?= base_url("booking/tanggal") ?>">Booking</a></li>
							<li class="menu-item"><a href="<?= base_url("layanan/cek_kode")?>">Cek Kode</a></li>
						</ul>
					</nav>

					<div class="social-links">
						<a href="https://www.facebook.com/cmctigawarna/" class="facebook"><i
								class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/cmctigawarna/" class="pinterest"><i
								class="fa fa-instagram"></i></a>
					</div>
				</div>