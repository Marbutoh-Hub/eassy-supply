<?php

include "../../controls/config/connection.php";
include "../../controls/function/function.php";
include "../../../eassy-supply/view/header/index.php";
include "../../../eassy-supply/view/navigasi/navbar.php";

?>
<div id="alldisp">
    <div id="allproduct">

        <?php
        if (isset($_POST['category'])) {
            $limit = $_POST['limit'];
            $limit = $limit + $limit;
            $idc = $_POST['category'];
            $dispproduct = "SELECT *,p.id as id_product,p.id_category as id_category FROM product p
            LEFT JOIN detail_product dp ON dp.id = p.id_detail
            LEFT JOIN category c ON c.id = p.id_category
            WHERE p.id_category = '$idc'
            limit $limit";

            if ($idc == '1') {
                $rootimg = '../../assets/images/hoodie-disp/';
            } elseif ($idc == '2') {
                $rootimg = '../../assets/images/Longpants-disp/';
            }
        } else if (isset($_GET['category'])) {
            $limit = 8;
            $idc = $_GET['category'];
            $dispproduct = "SELECT *,p.id as id_product,p.id_category as id_category FROM product p
            LEFT JOIN detail_product dp ON dp.id = p.id_detail
            LEFT JOIN category c ON c.id = p.id_category
            WHERE p.id_category = '$idc'
            limit $limit";


            if ($idc == '1') {
                $rootimg = '../../assets/images/hoodie-disp/';
            } elseif ($idc == '2') {
                $rootimg = '../../assets/images/Longpants-disp/';
            }
        }


        $querydisp = mysqli_query($conn, $dispproduct);
        while ($r = mysqli_fetch_assoc($querydisp)) {

        ?>
            <div class="card border cb">
                <a href="../../view/detail-product/index.php?id=<?php echo $r['id_product'] ?>&disp=db">
                    <img src="<?php echo "$rootimg" . $r['nama_pict'] . "" ?>" class="card-img-top" alt="..." />
                </a>
                <div class="card-body" id="card-b">
                    <h5 class="card-title mb-3"><?php echo $r['nama_product'] ?></h5>
                    <s style="color: red">
                        <p class="card-text" style="color: red; font-size: 1rem"><?php echo rupiah($r['harga_asli']) ?></p>
                    </s>
                    <h6 class="text-notdisc"><?php echo rupiah($r['harga_barang']) ?></h6>
                </div>
            </div>
        <?php } ?>
        <!-- end -->
        <span class=" mt-4" style="width: 100%; text-align:center; padding:20px">

            <form action="../../../eassy-supply/view/disp-barang/index.php" method="POST">
                <input type="hidden" name="limit" id="limit" value="<?php echo $limit ?>">
                <input type="hidden" name="category" id="category" value="<?php echo $idc ?>">
                <h6>
                    <button type='submit' class="btn btn-outline-light" style="color:black;">
                        SEE MORE
                    </button>
                </h6>
            </form>
        </span>
    </div>
</div>
</div>

<?php
include "../../view/footer/footer.php";
?>