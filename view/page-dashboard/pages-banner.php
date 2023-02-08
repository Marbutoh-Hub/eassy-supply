<?php
include "../../../eassy-supply/controls/config/connection.php";

if (isset($_POST['upload'])) {
	$id = $_POST['id_pict'];
	session_start();
	$_SESSION['notif'];
	$_SESSION['warna_notif'];


	function upload()
	{

		$namafile = $_FILES['upload_data']['name'];
		$size = $_FILES['upload_data']['size'];
		$error = $_FILES['upload_data']['error'];
		$tmp_name = $_FILES['upload_data']['tmp_name'];


		$extensivalid = ['jpg', 'jpeg', 'png'];
		$extensigambar = explode('.', $namafile);
		$extensigambar = strtolower(end($extensigambar));




		if ($error === 4) {
			$notif = 'Pilih gambar dulu anjing';
			$_SESSION['notif'] = $notif;
			$_SESSION['warna_notif'] = 'danger';
			return false;
		}

		if (!in_array($extensigambar, $extensivalid)) {
			$notif = 'Ini bukan format gambar goblok';
			$_SESSION['notif'] = $notif;
			$_SESSION['warna_notif'] = 'danger';
			return false;
		}

		if ($size < 403997) {
			$notif = 'Si tolol ukurannya kekecilan';
			$_SESSION['notif'] = $notif;
			$_SESSION['warna_notif'] = 'danger';
			return false;
		} elseif ($size > 50406581) {
			$notif = 'Lah lu goblok banget ini malah kegedean ukurannya';
			$_SESSION['notif'] = $notif;
			$_SESSION['warna_notif'] = 'danger';
			return false;
		}
		$gambarfix = uniqid();
		$gambarfix .= '.';
		$gambarfix .= $extensigambar;
		move_uploaded_file($tmp_name, '../../assets/images/' . $gambarfix);

		return $gambarfix;
	}


	$gambarbanner = upload();

	if (!$gambarbanner) {
		$query = "SELECT * FROM disp_banner";
		$querybanner = mysqli_query($conn, $query);
	} else {
		$queryupdate = "UPDATE disp_banner SET nama_file = '$gambarbanner' WHERE id = '$id'";
		mysqli_query($conn, $queryupdate);
		$query = "SELECT * FROM disp_banner";
		$querybanner = mysqli_query($conn, $query);
		$notif = 'Nah ini baru bener';
		$_SESSION['notif'] = $notif;
		$_SESSION['warna_notif'] = 'success';
	}
} else {
	$query = "SELECT * FROM disp_banner";
	$querybanner = mysqli_query($conn, $query);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="img/icons/logo-brand-dashboard.png" />

	<title>Banner | Chemistry Store</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="../../eassy-supply/assets/css/stylesadmin.css">
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

	<link href="css/app.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />


</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
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

					<li class="sidebar-item active">
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

					<li class="sidebar-item">
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

					<h1 class="h3 mb-3">Banner</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Edit Banner Home</h5>
									<?php
									if (isset($_POST['upload'])) {
										echo '
										<div class="alert alert-' . $_SESSION['warna_notif'] . ' alert-dismissible fade show mt-4" role="alert">
											' . $_SESSION['notif'] . ' 
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>';
									}
									?>
								</div>
								<div class="card-body">
									<div class="row row-cols-1 row-cols-md-2 g-4">
										<?php
										while ($r =  mysqli_fetch_assoc($querybanner)) {
										?>
											<div class="col">
												<div class="card">
													<img src=" ../../assets/images/<?php echo $r['nama_file'] ?>" style="height: 330px;" alt=" ...">
													<div class="card-body">
														<h5 class="card-title">Edit</h5>
														<div class="input-group mb-3">
															<form action="" method="POST" enctype="multipart/form-data">
																<div class="input-group">
																	<input type="hidden" name="id_pict" value="<?php echo $r['id'] ?>">
																	<input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="upload_data" aria-label="Upload">
																	<button type="submit" class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04" name="upload">Simpan</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										<?php } ?>
									</div>
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

</body>

</html>