<?php
include "../../controls/config/connection.php";
include "../../controls/function/function.php";

if (isset($_POST['category'])) {

    $idc = $_POST['category'];
    $dispproduct = "SELECT *,p.id as id_product,p.id_category as id_category FROM product p
                LEFT JOIN detail_product dp ON dp.id = p.id_detail
                LEFT JOIN category c ON c.id = p.id_category
                WHERE p.id_category = '$idc'";

    if ($idc == '1') {
        $rootimg = '../../assets/images/hoodie-disp/';
    } elseif ($idc == '2') {
        $rootimg = '../../assets/images/Longpants-disp/';
    } elseif ($idc == '3') {
        $rootimg = '../../assets/images/Shortpants-disp/';
    } elseif ($idc == '4') {
        $rootimg = '../../assets/images/tshirt-disp/';
    }

    $querydisp = mysqli_query($conn, $dispproduct);
    while ($r = mysqli_fetch_assoc($querydisp)) {

        echo '<div class="card border cb">
                <a href="../../view/detail-product/index.php?id=' . $r['id_product'] . '&disp=db">
                    <img src="' . $rootimg . '' . $r['nama_pict'] . '" class="card-img-top" alt="..." />
                </a>
                <div class="card-body" id="card-b">
                    <h5 class="card-title mb-3" id="c">' . $r['nama_product'] . '</h5>
                    <s style="color: red">
                        <p class="card-text" style="color: red; font-size: 1rem">' . rupiah($r['harga_asli']) . '</p>
                    </s>
                    <h6 class="text-notdisc">' . rupiah($r['harga_barang']) . '</h6>
                </div>
            </div>';
    }
}
