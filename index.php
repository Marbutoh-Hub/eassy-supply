<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</head>

<body>
  <div id="main-content">
    <div id="header"></div>
    <div id="content"></div>
    <div id="footer"></div>
  </div>
  <script>
    $(document).ready(function() {
      $("#header").load("view/navigasi/navbar.php");
      $("#content").load("view/landing-page/landing.php");
      $("#footer").load("view/footer/footer.php");

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