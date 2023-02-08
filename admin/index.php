<?php
include "../../eassy-supply/controls/config/connection.php";

if (isset($_POST['login'])) {
    $ussername = $_POST['ussername'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE ussername = '$ussername'");


    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            header("Location:../view/page-dashboard/index.php");
            exit;
        }
    }
    $validasi = false;
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../view/page-dashboard/img/icons/logo-brand-dashboard.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../eassy-supply/assets/css/stylesadmin.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>

<body>
    <div id="container-login">
        <div class="drawer-form-login">
            <div class="logo" style="width: 60px; margin:2px auto;">
                <img src="../assets/images/logo-brand.jpeg" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="text-title mt-4 mb-3" style="text-align:center;">
                <p class="text-login">
                    Sign In to Chemistry Store
                </p>
            </div>
            <?php
            if (isset($_POST['login'])) {
                if ($validasi === false) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Periksa Kembali</strong> Ussername dan password tidak sesuai !!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }
            ?>

            <form id="formulir" method="post" action="">
                <label class="mt-4" for="Ussername">Ussername</label>
                <input class="mt-2 rounded-3 p-1" type="text" id="ussername" name="ussername">
                <label class="mt-2 rounded-3" for="Password">Password</label>
                <input class="mt-2 rounded-3 p-1" type="password" id="password" name="password">
                <button type="submit" id="login" name="login" class="mt-4 mb-4 p-2" style="border-radius: 9px;">Login</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script>
        $(document).ready(function() {
            val = $('#validasi').val();
            if (val === true) {
                window.location.href = '../view/page-dashboard/index.php';
            }
        })
    </script> -->
</body>

</html>