<?php
include "../../../eassy-supply/controls/config/connection.php";

if (isset($_POST['ubah'])) {
  $namaStore = $_POST['nama_store'];
  $emailStore = $_POST['email_store'];
  $alamatStore = $_POST['alamat_store'];


  $query = "UPDATE profile_store SET nama_store = '$namaStore',email_store = '$emailStore',alamat = '$alamatStore'";
  mysqli_query($conn, $query);

  $dataprofile = mysqli_affected_rows($conn);

  for ($i = 1; $i < 7; $i++) {
    $querysosmed = "UPDATE master_sosmed SET link_sosmed = '$_POST[$i]' WHERE id = '$i'";
    mysqli_query($conn, $querysosmed);
  }

  $hasil = $dataprofile;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5" />
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />

  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" /> -->
  <link rel="shortcut icon" href="img/icons/logo-brand-dashboard.png" />

  <title>Profile Perusahaan | Chemistry Store</title>

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

          <li class="sidebar-item  active">
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
      <?php
      $Profile = "SELECT * FROM profile_store";

      $queryprofile = mysqli_query($conn, $Profile);


      $linksosmed = array();
      $namasosmed = array();


      while ($r = mysqli_fetch_assoc($queryprofile)) {
        $sosmed = $r['id_link_sosmed'];
        $idsosmed = explode(',', $sosmed);
        for ($i = 0; $i < count($idsosmed); $i++) {
          $sosmedrawer = "SELECT * FROM master_sosmed WHERE id = " . $idsosmed[$i];
          $querysosmed = mysqli_query($conn, $sosmedrawer);
          while ($s = mysqli_fetch_assoc($querysosmed)) {
            array_push($linksosmed, $s['link_sosmed']);
            array_push($namasosmed, $s['nama_sosmed']);
          }
        }

      ?>
        <main class="content">
          <div class="container-fluid p-0">
            <div class="mb-3">
              <h1 class="h3 d-inline align-middle">Profile Store</h1>
            </div>
            <div class="row">
              <div class="col-md-4 col-xl-3">
                <div class="card mb-3">
                  <div class="card-header">

                    <h5 class="card-title mb-0">Profile Details</h5>
                  </div>
                  <div class="card-body text-center">
                    <img src="img/avatars/store-profile.jpg" class="img-fluid mb-3 rounded-3" alt="">
                    <h5 class="card-title mb-0 text-dark mb-3" style="font-size: 1.3rem;"><?php echo $r['nama_store'] ?></h5>
                  </div>
                  <hr class="my-0" />
                  <div class="card-body">
                    <h5 class="h6 card-title">Market Place</h5>
                    <ul class="list-group">
                      <?php

                      $Mail;
                      for ($j = 0; $j < count($namasosmed); $j++) {


                      ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <a href="<?php echo $linksosmed[$j] ?>">
                            <?php echo $namasosmed[$j] ?>
                          </a>
                          <?php
                          if ($namasosmed[$j] === 'Tokopedia' || $namasosmed[$j] === 'Lazada' || $namasosmed[$j] === 'Shopee') {
                            echo '<span data-feather="globe" class="feather-md "></span>';
                          } elseif ($namasosmed[$j] === 'Instagram') {
                            echo '<span data-feather="instagram" class="feather-md "></span>';
                          } else if ($namasosmed[$j] === 'Tik-Tok') {
                            echo '<span data-feather="music" class="feather-md "></span>';
                          } else if ($namasosmed[$j] === 'Whatsapp') {
                            echo '<span data-feather="message-circle" class="feather-md "></span>';
                          }
                          ?>
                        </li>
                      <?php } ?>
                    </ul>
                  </div>
                  <hr class="my-0" />
                  <div class="card-body">

                    <span data-feather="home" class="feather-md mb-3"></span>
                    <h5 class="h6 card-title">
                      Head Office
                    </h5>
                    <ul class="list-unstyled mb-0">
                      <li class="mb-1">
                        <?php echo $r['alamat'] ?>
                      </li>
                    </ul>
                  </div>
                  <hr class="my-0" />
                </div>
              </div>

              <div class="col-md-8 col-xl-9">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title mb-0">Edit Info</h5>
                  </div>

                  <div class="card-body h-100">
                    <?php
                    if (isset($_POST['ubah'])) {
                      if ($hasil > 0 || $hasil === 0) {
                        echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Data Berhasil diubah  </strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                        ';
                      }
                    }
                    ?>

                    <form method="POST" action="">
                      <div class="row mb-3">
                        <div class="col">
                          <label for="nama" class="form-label">Nama Store</label>
                          <input type="text" class="form-control" id="nama_store" name="nama_store" value="<?php echo $r['nama_store'] ?>">
                        </div>
                        <div class="col">
                          <label for="Email" class="form-label">Email Store</label>
                          <input type="email" class="form-control" id="Email" name="email_store" value="<?php echo trim($r['email_store']) ?>">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-lg-6">
                          <label for="Head_office" class="form-label">Head Office</label>
                          <textarea type="text" class="form-control" id="Head_office" name='alamat_store' cols="40" rows="5"><?php echo trim($r['alamat']) ?></textarea>
                        </div>
                      </div>
                      <h5 class="card-title mb-0 mt-4 text-dark">Contact Us :</h5>
                      <?php
                      $ilinksosmed = array();
                      $idsosmeds = array();
                      $sosmedinput = "SELECT * FROM master_sosmed";
                      $queryinput = mysqli_query($conn, $sosmedinput);
                      while ($k = mysqli_fetch_assoc($queryinput)) {
                        array_push($ilinksosmed, $k['link_sosmed']);
                        array_push($idsosmeds, $k['id']);
                      }

                      ?>
                      <div class="row mt-3">
                        <div class="col">
                          <label for="tokopedia" class="form-label">Tokopedia</label>
                          <input type="text" class="form-control" name="<?php echo $idsosmeds[0] ?>" id="tokopedia" value="<?php echo $ilinksosmed[0] ?>">
                        </div>
                        <div class="col">
                          <label for="lazada" class="form-label">Lazada</label>
                          <input type="text" class="form-control" id="lazada" name="<?php echo $idsosmeds[1] ?>" value="<?php echo $ilinksosmed[1] ?>">
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col">
                          <label for="shopee" class="form-label">Shopee</label>
                          <input type="text" class="form-control" id="shopee" name="<?php echo $idsosmeds[2] ?>" value="<?php echo $ilinksosmed[2] ?>">
                        </div>
                        <div class="col">
                          <label for="instagram" class="form-label">Instagram</label>
                          <input type="text" class="form-control" id="instagram" name="<?php echo $idsosmeds[3] ?>" value="<?php echo $ilinksosmed[3] ?>">
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col">
                          <label for="tik_tok" class="form-label">Tik-tok</label>
                          <input type="text" class="form-control" id="tik_tok" name="<?php echo $idsosmeds[4] ?>" value="<?php echo $ilinksosmed[4] ?>">
                        </div>
                        <div class="col">
                          <label for="whatsapp" class="form-label">Whatsapp No</label>
                          <input type="text" class="form-control" id="whatsapp" name="<?php echo $idsosmeds[5] ?>" value="<?php echo $ilinksosmed[5] ?>">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mt-4" name="ubah">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      <?php } ?>

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