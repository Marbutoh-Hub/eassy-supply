<?php
include "../../controls/config/connection.php";
include "../../controls/function/function.php";

if (isset($_POST['category'])) {
    $limit = 8;
    $idc = $_POST['category'];
    $dispproduct = "SELECT *,p.id as id_product,p.id_category as id_category FROM product p
                LEFT JOIN detail_product dp ON dp.id = p.id_detail
                LEFT JOIN category c ON c.id = p.id_category
                WHERE p.id_category = '$idc'
                limit $limit";
    $querydisp = mysqli_query($conn, $dispproduct);
    $count = mysqli_num_rows($querydisp);
    if ($count <= 0) {
        echo '<div class="alert alert-warning d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                    <div>
                    Mohon Maaf untuk saat ini persediaan barang yang anda cari sedang KOSONG untuk sementara waktu
                    </div>
                </div>';
    } else {
        $dispproduct = "SELECT *,p.id as id_product,p.id_category as id_category FROM product p
        LEFT JOIN detail_product dp ON dp.id = p.id_detail
        LEFT JOIN category c ON c.id = p.id_category
        WHERE p.id_category = '$idc'
        limit $limit";

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
}
