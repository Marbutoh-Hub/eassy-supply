<div class="landing">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <?php
    $banner = "SELECT * FROM disp_banner";
    $querybanner = mysqli_query($conn, $banner);
    ?>
    <div class="carousel-inner" id="banner">
      <?php
      while ($r = mysqli_fetch_assoc($querybanner)) {
      ?>
        <div class="carousel-item <?php echo $r['status_active'] ?> fixed-top" style="z-index: -99">
          <img src="<?php echo "assets/images/" . $r['nama_file'] . "" ?>" class="w-100 img-fluid" alt="..." />
        </div>
      <?php
      }
      ?>
    </div>
    <button class="carousel-control-next mt-3" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h5 id="Best-Seller">Best Seller</h5>
  <div id="card-product">
    <?php
    $bestseller = "SELECT * FROM product_best_seller";
    $querybs = mysqli_query($conn, $bestseller);
    while ($r = mysqli_fetch_assoc($querybs)) {
    ?>
      <div class="card border cb">
        <a href="view/detail-product/index.php?id= <?php echo $r['id'] ?>">
          <img src="<?php echo "assets/images/product-best-seller/" . $r['nama_pict'] . "" ?>" class="card-img-top" alt="..." />
        </a>
        <div class="card-body" id="card-b">
          <h5 class="card-title mb-3"><?php echo $r['nama_product'] ?></h5>
          <s style="color: red">
            <p class="card-text" style="color: red; font-size: 1rem"><?php echo rupiah($r['harga_asli']) ?></p>
          </s>
          <h6 class="text-notdisc"><?php echo rupiah($r['harga_product']) ?></h6>
        </div>
      </div>
    <?php } ?>

  </div>
</div>