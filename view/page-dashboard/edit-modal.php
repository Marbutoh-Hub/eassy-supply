<?php
include "../../../eassy-supply/controls/config/connection.php";
include "../../../eassy-supply/controls/function/function.php";

$modal_id = $_GET['modal_id'];
$modal = mysqli_query($conn, "SELECT pbs.id as id_b,dp.id AS id_d, pbs.nama_product,pbs.nama_pict,pbs.harga_asli,pbs.harga_product,dp.stock, 
dp.size,dp.deskripsi1 AS d1, dp.deskripsi2 AS d2,dp.deskripsi3 AS d3, dp.deskripsi4 AS d4 
FROM product_best_seller pbs 
LEFT JOIN detail_product dp ON dp.id = pbs.id_detail WHERE pbs.id='$modal_id'");
while ($r = mysqli_fetch_array($modal)) {

?>


    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Best Seller Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="pict">
                    <div class="card" style="width: 10rem; margin-left:1px">
                        <img id="preImg" src="<?php echo "../../assets/images/product-best-seller/" . $r['nama_pict'] . "" ?>" class="card-img-top" alt="...">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <p id="errorMsg"></p>
                                <div class="mb-3">
                                    <input type="hidden" id="old_pict" name="old_pict" value="<?php echo $r['nama_pict'] ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="new_pict" name="new_pict">
                                    <button type="submit" class="input-group-text" for="inputGroupFile02">Upload</button type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form id="form-edit" name="modal_popup">
                    <div class="container">
                        <!-- <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="new_pict" name="new_pict">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="hidden" id="old_pict" name="old_pict" value="<?php echo $r['nama_pict'] ?>">
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nama_product" class="col-form-label">Nama Product</label>
                                    <input type="hidden" id="id_barang" name="id_barang" value="<?= $r['id_b'] ?>">
                                    <input type="text" class="form-control" id="nama_product" name="nama_product" value="<?= $r['nama_product'] ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="harga_asli" class="col-form-label">Harga Asli</label>
                                    <input type="number" class="form-control" id="harga_asli" name="harga_asli" value="<?= $r["harga_asli"] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="harga_discount" class="col-form-label">Harga Discount</label>
                                    <input type="number" class="form-control" id="harga_discount" name="harga_discount" value="<?= $r["harga_product"] ?>">
                                </div>
                            </div>
                        </div>
                        <h6 style="font-weight: bold;">
                            Details Product :
                            <input type="hidden" id="id_d" name="id_d" value="<?= $r['id_d'] ?>">
                        </h6>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="desc_1" class="col-form-label">Deskripsi Satu</label>
                                    <input type="text" class="form-control" id="desc_1" name="desc_1" value="<?= $r['d1'] ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="desc_2" class="col-form-label">Deskripsi Dua</label>
                                    <input type="text" class="form-control" id="desc_2" name="desc_2" value="<?= $r['d2'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="desc_3" class="col-form-label">Deskripsi Tiga</label>
                                    <input type="text" class="form-control" id="desc_3" name="desc_3" value="<?= $r['d3'] ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="desc_4" class="col-form-label">Deskripsi Empat</label>
                                    <input type="text" class="form-control" id="desc_4" name="desc_4" value="<?= $r['d4'] ?>">
                                </div>
                            </div>
                        </div>

                        <label for="size" class="col-form-label">Size</label>

                        <div class="row" style="margin-left:20px">
                            <?php
                            $drawerSize = explode(',', $r['size']);
                            for ($i = 0; $i < count($drawerSize); $i++) {
                                echo '<div class="col col-lg-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        ' . $drawerSize[$i] . '
                                    </label>
                                </div>';
                            }

                            ?>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="stock" class="col-form-label">Stock</label>
                                    <input type="number" class="form-control" id="stock" name="stock" value="<?= $r['stock'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



<?php } ?>