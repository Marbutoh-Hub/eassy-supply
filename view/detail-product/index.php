<?php
include "../../controls/config/connection.php";
include "../../controls/function/function.php";

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/eassy-supply/assets/css/style.css" />
    <title>detail</title>
</head>

<body>
    <div id="detail-container">
        <div id="Header-detail">
            <h2>CHEMISTRY STORE</h2>
        </div>
        <div id="back-detail">
            <a href="/eassy-supply/index.php" style="text-decoration: none; color:black">
                <img src="https://img.icons8.com/pastel-glyph/64/null/circled-left.png" />
                Back
            </a>
        </div>
        <?php

        if (isset($_GET['disp'])) {
            $id = $_GET['id'];
            $detail_product = "SELECT *,c.id as cid FROM product p
            LEFT JOIN detail_product dp ON dp.id = p.id_detail
            LEFT JOIN category c ON c.id = p.id_category
            WHERE p.id = '$id'";
        } else {
            $id = $_GET['id'];
            $detail_product = "SELECT * 
            FROM product_best_seller pbs
            LEFT JOIN detail_product dp ON dp.id = pbs.id_detail
            WHERE pbs.id = $id";
        }

        $querydetail = mysqli_query($conn, $detail_product);
        while ($r = mysqli_fetch_assoc($querydetail)) {

        ?>
            <div class="row" id="content-detail">
                <div class="card border border-white" id="card-gambar">
                    <?php
                    if (isset($_GET['disp'])) {

                        if ($r['cid'] == '1') {
                            $rootimg = '../../assets/images/hoodie-disp/';
                        } elseif ($r['cid'] == '2') {
                            $rootimg = '../../assets/images/Longpants-disp/';
                        } elseif ($r['cid'] == '3') {
                            $rootimg = '../../assets/images/Shortpants-disp/';
                        } elseif ($r['cid'] == '4') {
                            $rootimg = '../../assets/images/tshirt-disp/';
                        }
                    ?>

                        <img src="<?php echo "/eassy-supply/assets/images/" . $rootimg . "" . $r['nama_pict'] . "" ?>" class="img-fluid" />
                    <?php } else { ?>
                        <img src="<?php echo "/eassy-supply/assets/images/product-best-seller/" . $r['nama_pict'] . "" ?>" class="img-fluid" />
                    <?php } ?>
                </div>
                <div class="card border border-white" id="card-deskripsi">
                    <h3><?php echo $r['nama_product'] ?></h3>
                    <span class="price-label">
                        <s style="color: red">
                            <p class="card-text" style="color: red; font-size: 1rem"><?php echo rupiah($r['harga_asli']) ?></p>
                        </s>
                        <?php
                        if (isset($_GET['disp'])) {
                        ?>
                            <h6 class="text-notdisc" style="padding-left: 20px;"><?php echo rupiah($r['harga_barang']) ?></h6>
                        <?php } else { ?>
                            <h6 class="text-notdisc" style="padding-left: 20px;"><?php echo rupiah($r['harga_product']) ?></h6>
                        <?php } ?>
                    </span>
                    <span>
                        <h5 style="margin-top:30px;">
                            Detail Product
                        </h5>
                        <ul>
                            <li><?php echo $r['deskripsi1'] ? $r['deskripsi1'] : "-"; ?></li>
                            <li><?php echo $r['deskripsi2'] ? $r['deskripsi2'] : "-"; ?></li>
                            <li><?php echo $r['deskripsi3'] ? $r['deskripsi3'] : "-"; ?></li>
                            <li><?php echo $r['deskripsi4'] ? $r['deskripsi4'] : "-"; ?></li>
                        </ul>
                    </span>
                    <span>Size</span>
                    <div class="container mt-4">
                        <div id="size" style="width: 100%;">
                            <?php
                            if ($r['size'] == NULL) {
                                $uk = '-,-,-,-';
                            } else {
                                $uk = $r['size'];
                            }
                            $ukuran = explode(",", $uk);
                            for ($i = 0; $i < count($ukuran); $i++) {
                                echo "<span class=' border'>" . $ukuran[$i] . "</span>";
                            }
                            ?>
                        </div>
                    </div>
                    <span class="mt-2">Stock</span>
                    <div class="container mt-2">
                        <div class="mt-2" style="width: 100%;">
                            <span style="border-radius:50px">
                                <h6> <?php echo $r['stock'] ? $r['stock'] : 0; ?> </h6>
                            </span>
                        </div>
                    </div>
                    <span style="margin-top: 20px;">Order By</span>
                    <div class="card-body" id="drawer-shopp">
                        <span class="drawer-shopee">
                            <a href="#" class="card-link" style="text-decoration: none">
                                <img src="https://img.icons8.com/fluency/48/null/shopee.png" class="icon-shopee" />
                            </a>
                        </span>
                        <span class="drawer-lazada">
                            <a href="#" class="card-link" style="text-decoration: none">
                                <img src="/eassy-supply/assets/icon/icon-lazada3.svg" class="icon-lazada" />
                            </a>
                        </span>
                        <span class="drawer-tokopedia">
                            <a href="#" class="card-link" style="text-decoration: none">
                                <img src="/eassy-supply/assets/icon/icon-tokopedia2.svg" class="icon-tokopedia" />
                            </a>
                        </span>
                        <span class="drawer-whatsapp">
                            <a href="#" class="card-link" style="text-decoration: none">
                                <img src="https://img.icons8.com/color/48/null/whatsapp--v1.png" class="icon-whatsapp" />
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>