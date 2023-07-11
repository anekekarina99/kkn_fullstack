<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="assets/images/bio-energy.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="assets/css/tiny-slider.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">

	<?php if (isset($_GET['home'])) { ?>
		<title> Beranda </title>
	<?php } else if (isset($_GET['about'])) { ?>
		<title> Tentang </title>
	<?php } else if (isset($_GET['shop'])) { ?>
		<title> Belanja </title>
	<?php } else if (isset($_GET['contact'])) { ?>
		<title> Kontak </title>
	<?php } else if (isset($_GET['shop_detail'])) { ?>
		<title> Detail Produk </title>
	<?php } else if (isset($_GET['cart'])) { ?>
		<title> Total Pembelian </title>
	<?php } else { ?>
		<title> Beranda </title> <?php } ?>
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="index.php?homepage">WanaStore<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li <?php if (isset($_GET["home"])) {
							echo 'class="nav-item active"';
						} ?>><a class="nav-link" href="index.php?home">Beranda</a>
					</li>
					<li <?php if (isset($_GET["about"])) {
							echo 'class="nav-item active"';
						} ?>><a class="nav-link" href="index.php?about">Tentang</a></li>
					<li <?php if (isset($_GET["shop"])) {
							echo 'class="nav-item active"';
						} ?>><a class="nav-link" href="index.php?shop">Belanja</a></li>
					<li <?php if (isset($_GET["contact"])) {
							echo 'class="nav-item active"';
						} ?>><a class="nav-link" href="index.php?contact">Kontak</a></li>
					<!--<li><a class="nav-link" href="services.html">Services</a></li>
					<li><a class="nav-link" href="blog.html">Blog</a></li>-->

				</ul>

				<!--<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<li><a class="nav-link" href="login_admin.php"><img src="assets/images/user.svg"></a></li>

				</ul>-->
			</div>
		</div>

	</nav>
	<!-- End Header/Navigation -->