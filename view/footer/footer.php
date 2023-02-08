<div id="footer">
  <div class="footer">
    <div class="header-footer">
      <span>
        <h3>Purchase Order</h3>
      </span>

      <div class="container">
        <div class="row mb-3 purchase">
          <div class="col po">
            <img src="../../../eassy-supply/assets/images/images-footer/order2.png" alt="" class="tutor-order mt-4 mb-3" />
            <h6>Pilih produk</h6>
            <p>Anda dapat melihat semua produk kami melalui marketplace Shopee, Lazada, Tokopedia, atau di instagram official kami.</p>
          </div>
          <div class="col po">
            <img src="../../../eassy-supply/assets/images/images-footer/pesan.png" alt="" class="tutor-order mt-4 mb-3" />
            <h6>Lakukan pemesanan</h6>
            <p>Lakukan pemesanan melalui whatsapp atau bisa langsung melakukan order produk di Lazada, Shopee, dan Tokopedia.</p>
          </div>
          <div class="col po">
            <img src="../../../eassy-supply/assets/images/images-footer/pembayaran.png" alt="" class="tutor-order mt-4 mb-3" />
            <h6>Lakukan pembayaran</h6>
            <p>Lakukan pembayaran melalui rekening bank atau melalui metode COD di Shopee, Lazada, dan Tokopedia.</p>
          </div>
          <div class="col po">
            <img src="../../../eassy-supply/assets/images/images-footer/pengiriman.png" alt="" class="tutor-order mt-4 mb-3" />
            <h6>Pengiriman pesanan</h6>
            <p>Barang akan diantar ke alamat tujuan menggunakan jasa ekspedisi.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-footer">
      <div class="container">
        <div class="row" id="footer-component">
          <div class="col">
            <div class="metode-pembayaran-drawer">
              <h6 class="mp-text">Metode Pembayaran</h6>
              <div class="icon-mp">
                <span class="drawer-mp"><img src="../../../eassy-supply/assets/icon/icon-bca.svg" alt="" srcset="" class="icon-rek" /></span>
                <span class="drawer-mp"><img src="../../../eassy-supply/assets/icon/icon-bri.svg" alt="" srcset="" class="icon-rek" /></span>
                <span class="drawer-mp"><img src="../../../eassy-supply/assets/icon/icon-mandiri.svg" alt="" srcset="" class="icon-rek" /></span>
              </div>
            </div>
          </div>
          <div class="col" id="fu-col">
            <div class="follow-us-drawer">
              <h6 class="mp-text">Follow Us</h6>
              <div class="icon-fu">
                <span class="drawer-fu"><img src="../../../eassy-supply/assets/icon/icon-tokopedia2.svg" alt="" srcset="" class="icon-fu-sosmed" /></span>
                <span class="drawer-fu"><img src="../../../eassy-supply/assets/icon/icon-lazada.svg" alt="" srcset="" class="icon-fu-sosmed" /></span>
                <span class="drawer-fu"><img src="../../../eassy-supply/assets/icon/icon-shopee.svg" alt="" srcset="" class="icon-fu-sosmed" /></span>
                <span class="drawer-fu"><img src="../../../eassy-supply/assets/icon/icon-instagram.svg" class="icon-fu-sosmed-ig" /></span>
                <span class="drawer-fu p-2"><img src="../../../eassy-supply/assets/icon/icon-tiktok2.svg" class="icon-fu-sosmed-tt" /></span>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-1" id="alamat-toko">
          <span>
            <h5 id="ho-ea">CHEMISTRY STORE HEAD OFFICE</h5>
          </span>
          <span id="ho-ea-detail">
            <p>Kelurahan kopo, Jl. Mandesa Gg Jasa Marga, No.29A, Kec. Bojongloa Kaler, Kota Bandung, Jawa Barat 40267 Telepon : (+62) 821-1902-2005 Email : eassysupply.co@gmail.com</p>
          </span>
          <small class="mb-3" style="color: rgb(108, 108, 108); font-size: 0.7rem">Chemistry &copy; 2023 . Allright Reserved</small>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script>
  $(document).ready(function() {
    $(window).scroll(function() {
      var wScroll = $(this).scrollTop();

      $("#next").css({
        transform: "translate(0px, " + wScroll / 6 + "%)",
      });
      if (wScroll > 20) {
        // $("#Best-Seller").css({
        //   // transform: "translate(0px, " + wScroll / -10 + "%)"
        // });
        $("#Best-Seller").css("display", "none");
      }

      if (wScroll < 20) {
        // $("#Best-Seller").css({
        //   // transform: "translate(0px, " + wScroll / -10 + "%)"
        // });
        $("#Best-Seller").css("display", "block");
      }

      if (wScroll > 100) {
        console.log("ok");
        $(".container .purchase .po").each(function(i) {
          setTimeout(function() {
            $(".container .purchase .po").eq(i).addClass("muncul");
          }, 900 * (i + 1));
        });
      }
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>