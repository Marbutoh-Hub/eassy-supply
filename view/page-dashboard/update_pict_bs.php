<?php

error_reporting(E_ERROR | E_PARSE);
include "../../../eassy-supply/controls/config/connection.php";

if (isset($_FILES['my_image'])) {
    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];


    if ($error === 0) {
        if ($img_size > 50406581) {

            $em = "Ukuran gambar kegedean !";

            $error = array('error' => 1, 'em' => $em);


            echo json_encode($error);
            exit();
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMGBS-", true) . '.' . $img_ex_lc;
                $img_upload_path = '../../assets/images/product-best-seller/' . $new_img_name;

                move_uploaded_file($tmp_name, $img_upload_path);

                $queryupdate = "UPDATE product_best_seller SET nama_pict = '$new_img_name' WHERE id = '1'";
                mysqli_query($conn, $queryupdate);
                $res = array('error' => 0, 'src' => $new_img_name);
                echo json_encode($res);
                exit();
            } else {

                $em = "Format tidak diizinkan !";

                $error = array('error' => 1, 'em' => $em);


                echo json_encode($error);
                exit();
            }
        }
    } else {
        $em = "Unknown error occurred !";

        $error = array('error' => 1, 'em' => $em);


        echo json_encode($error);
        exit();
    }
}
