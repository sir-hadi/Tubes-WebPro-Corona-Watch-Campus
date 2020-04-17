<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>CWC</title>

		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
			integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
			crossorigin="anonymous"
		/>
		<script
			src="https://code.jquery.com/jquery-3.4.1.js"
			integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
			integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
			crossorigin="anonymous"
		></script>
		<script
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
			integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
			crossorigin="anonymous"
		></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/style.css'?>" />
	</head>

	<body>
		<header>
			<!-- emergency Tab -->
			<div id="emergencyTab">
				<div class="row align-items-center" id="emergencyRow">
					<div class="col-9">
						<div class="row align-items-center">
							<img src=" <?php echo base_url().'assets/img/alert.png'?>" alt="alert" id="alertEmergency" />
							<h4 id="titleEmergency">EMERGENCY</h4>
						</div>
					</div>
					<div class="col">
						<a href="" id="emergencyQuestion"
							>Do you have an emergency bla bla bla bla?
							<i class="arrowRight"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="<?php base_url(); ?>">CWC</a>
				<button
					class="navbar-toggler"
					type="button"
					data-toggle="collapse"
					data-target="#navbarNav"
					aria-controls="navbarNav"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="<?php base_url(); ?>"
								>Home <span class="sr-only">(current)</span></a
							>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="<?= site_url('artikel') ?>">Article</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="<?= site_url('kampus') ?>">Campus</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="<?= site_url('pasien') ?>">Victim</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#">About Us</a>
						</li>
						<!-- Ini bisa berubah jadi username kalo dah login -->
						<li class="nav-item active">
							<a class="nav-link" href="#">Login</a>
						</li>
					</ul>
				</div>
			</nav>

			<div class="row">
				<div class="col-2">
					<img
						class="logo"
						src="https://pngimage.net/wp-content/uploads/2018/05/cdc-logo-png-5.png"
						alt=""
					/>
				</div>
				<div class="col-4">
					<!-- MegaMenu Goes Here i think(?) -->
				</div>
			</div>
		</header>
