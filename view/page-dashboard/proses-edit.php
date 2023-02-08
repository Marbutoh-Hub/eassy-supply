<?php
error_reporting(E_ERROR | E_PARSE);
include "../../../eassy-supply/controls/config/connection.php";
include "../../../eassy-supply/controls/function/function.php";


$id = $_POST['id'];
$idDetail = $_POST['idDetails'];
$namaP = $_POST['namaProducts'];
$hargaAsli = $_POST['hargaAslis'];
$hargaDiscount = $_POST['hargaDiscounts'];
$D1 = $_POST['desc1s'];
$D2 = $_POST['desc2s'];
$D3 = $_POST['desc3s'];
$D4 = $_POST['desc4s'];
$stock = $_POST['stocks'];


$modal = "UPDATE product_best_seller SET nama_product = '$namaP',harga_asli = '$hargaAsli',harga_product = '$hargaDiscount' WHERE id = '$id'";

mysqli_query($conn, $modal);

$cek1 = mysqli_affected_rows($conn);

$modal2 = "UPDATE detail_product SET deskripsi1='$D1',deskripsi2='$D2',deskripsi3='$D3',deskripsi4='$D4',stock='$stock' WHERE id = '$idDetail'";
mysqli_query($conn, $modal2);

$cek2 = mysqli_affected_rows($conn);

if ($cek1 > 0 || $cek2 > 0) {
    $validasi = [
        'status_update' => 'berhasil'
    ];
} else {
    $validasi = [
        'status_update' => 'gagal'
    ];
}
echo json_encode($validasi);
