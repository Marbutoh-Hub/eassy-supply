<?php
include "../../../eassy-supply/controls/config/connection.php";
include "../../../eassy-supply/controls/function/function.php";




$queryBarang = "SELECT pbs.id as id_b, pbs.nama_product,pbs.nama_pict,pbs.harga_asli,pbs.harga_product, 
				dp.size FROM product_best_seller pbs 
				LEFT JOIN detail_product dp ON dp.id = pbs.id_detail";

$result = mysqli_query($conn, $queryBarang);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/logo-brand-dashboard.png" />

	<link rel="shortcut icon" href="img/icons/logo-brand-dashboard.png" />
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">


	<title>Best Seller | Chemistry Store</title>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" href="../../eassy-supply/assets/css/stylesadmin.css">


	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> -->

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<!-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> -->
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />

	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>




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

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-banner.php">
							<i class="align-middle" data-feather="tv"></i> <span class="align-middle">Banner</span>
						</a>
					</li>


					<li class="sidebar-item  active">
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

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Best Seller</h1>
					</div>

					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Edit Data</h5>
								</div>
								<!-- <div class="card-header">
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Edit Data Barang</button>
								</div> -->

								<div class="card-body mt-4">
									<table class="table table-bordered " id="Best-seller">
										<thead>
											<tr>
												<th>no</th>
												<th>Nama Product</th>
												<th>Picture</th>
												<th>Harga Asli</th>
												<th>Harga Disc</th>
												<th>Size</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 0;
											while ($r = mysqli_fetch_assoc($result)) {
												$no++;
											?>
												<tr>
													<td><?= $no ?></td>
													<td><?= $r["nama_product"] ?></td>
													<td>
														<div class="card" style="width: 5rem;">
															<img src="<?php echo "../../assets/images/product-best-seller/" . $r['nama_pict'] . "" ?>" class="card-img-top" alt="...">
														</div>
													</td>
													<td><?= rupiah($r["harga_asli"]) ?></td>
													<td><?= rupiah($r["harga_product"]) ?></td>
													<td><?= $r["size"] ?></td>
													<td>
														<button type="button" class="btn btn-info open_modal" id='<?php echo $r['id_b'] ?>' data-toggle="modal">
															Edit
														</button>
													</td>
												</tr>
											<?php } ?>
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
		<!-- Modal Edit -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">

		</div>

		<!-- Akhir Modal Edit -->
	</div>
	</div>


	<script src="js/app.js"></script>

	<script>
		$(document).ready(function() {
			$('#Best-seller').DataTable({});
			$('#Best-seller').on('click', '.open_modal', function(e) {
				var m = $(this).attr("id");
				$.ajax({
					url: "edit-modal.php",
					type: "GET",
					data: {
						modal_id: m,
					},
					success: function(ajaxData) {
						$("#ModalEdit").html(ajaxData);
						$("#ModalEdit").modal('show', {
							backdrop: 'true'
						});
					}
				});
			})
		});
	</script>
	<script>

	</script>
	<script>
		$(document).on('submit', '#pict', function(e) {
			e.preventDefault();
			let form_data = new FormData();
			let img = $('#new_pict')[0].files;
			if (img.length > 0) {
				form_data.append('my_image', img[0]);
				$.ajax({
					url: "update_pict_bs.php",
					type: "POST",
					data: form_data,
					contentType: false,
					processData: false,
					success: function(res) {
						const data = JSON.parse(res);

						if (data.error === 1) {
							$('#errorMsg').text(data.em);
						} else if (data.error === 0) {
							let path = "../../assets/images/product-best-seller/" + data.src;
							$("#preImg").attr("src", path)
						}

						// console.log(data.error);


					}
				})
			} else {
				$('#errorMsg').text("Pilih gambar terlebih dahulu");
			}
		});
		$(document).on('submit', '#form-edit', function(e) {
			e.preventDefault();
			var idBarang = $('#id_barang').val()
			var idDetail = $('#id_d').val()
			var namaProduct = $('#nama_product').val()
			var hargaAsli = $('#harga_asli').val()
			var hargaDiscount = $('#harga_discount').val()
			var desc1 = $('#desc_1').val()
			var desc2 = $('#desc_2').val()
			var desc3 = $('#desc_3').val()
			var desc4 = $('#desc_4').val()
			var stock = $('#stock').val()
			var oldPict = $('#old_pict').val();
			let form_data = new FormData();
			let img = $('#new_pict')[0].files;
			// form_data.append('my_image', img[0])


			$.ajax({
				url: "proses-edit.php",
				method: "POST",
				data: {
					id: idBarang,
					idDetails: idDetail,
					namaProducts: namaProduct,
					hargaAslis: hargaAsli,
					hargaDiscounts: hargaDiscount,
					desc1s: desc1,
					desc2s: desc2,
					desc3s: desc3,
					desc4s: desc4,
					stocks: stock,
				},
				dataType: "json",
				success: function(response) {
					if (response.status_update === 'berhasil') {
						Swal.fire({
							position: 'center',
							icon: 'success',
							title: 'data berhasil diedit',
							showConfirmButton: true,
							timer: 1500
						}).then(function() {
							location.reload(true);
							// $("#ModalEdit").hide({
							// 	backdrop: 'false'
							// })
							$("#ModalEdit").modal('hide')
							location.reload();
						});
					}


				}
			})
		})
	</script>




</body>

</html>