<?php
if (isset($_POST['login'])) {
    $ussername = $_POST['ussername'];
    $password = $_POST['password'];


    $result = mysqli_query($conn, "SELECT * FROM users WHERE ussername = '$ussername'");


    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // header("Location:../view/page-dashboard/index.php");
            echo ('betul');
        }
    }
    echo ('salah');
}
