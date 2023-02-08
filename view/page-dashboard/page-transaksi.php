<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="img/icons/logo-brand-dashboard.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/upgrade-to-pro.html" />

	<title>Transaksi | Chemistry Store</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />

	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">Chemistry Store</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Home
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="index.php">
							<i class="align-middle" data-feather="monitor"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.php">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile Store</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-banner.php">
							<i class="align-middle" data-feather="tv"></i> <span class="align-middle">Banner</span>
						</a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-best-sell.php">
							<i class="align-middle" data-feather="award"></i> <span class="align-middle">Best Seller</span>
						</a>
					</li>

					<li class="sidebar-header">
						Transaksi
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="page-transaksi.php">
							<i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Transaksi Penjualan</span>
						</a>
					</li>

					<li class="sidebar-header">
						Whats New
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-cover.php">
							<i class="align-middle" data-feather="square"></i> <span class="align-middle">Cover</span>
						</a>
					</li>

					<li class="sidebar-header">
						Product
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="Pages-hoodie.php">
							<i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Hoodie</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-tshirt.php">
							<i class="align-middle" data-feather="inbox"></i> <span class="align-middle">T-Shirt</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-longpants.php">
							<i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Long Pants</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-shortpants.php">
							<i class="align-middle" data-feather="package"></i> <span class="align-middle">Short Pants</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<span class="text-dark">Admin Store</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end mt-2">
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Transaksi</h1>
					</div>
					<div class="card-header mb-4 ">
						<button class="btn btn-primary" type="submit">Tambah Data Penjualan</button>
					</div>
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Add Data Transaksi</h5>
								</div>
								<div class="card-body mt-4">
									<table class="table table-bordered border-primary" id="transaksi">
										<thead>
											<tr>
												<th>no</th>
												<th>Picture</th>
												<th>Harga Asli</th>
												<th>Harga Disc</th>
												<th>Size</th>
												<th>Deskripsi 1</th>
												<th>Deskripsi 2</th>
												<th>Deskripsi 3</th>
												<th>Deskripsi 4</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>

										</tbody>
									</table>
								</div>
							</div>

						</div>

					</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0" style="font-size: 0.7rem;">
								<a class="text-muted" href="https://adminkit.io/" target="_blank">Chemistry Store</a> &copy; 2023 all reserved
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>
	<script>
		$(document).ready(function() {
			$('#transaksi').DataTable({});
		});
	</script>

</body>

</html>