<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
  <div class="container-fluid navbar">
    <a class="navbar-brand">
      <img src="assets/images/logo-brand.jpeg" alt="" class="logo" />
      <span id="title-logo"> Eassy Supply </span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-3" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="whats-new">WHAT'S NEW</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> PRODUCT </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Hoodie</a></li>
            <li><a class="dropdown-item" href="#">T-shirt</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="#">Short pants</a></li>
            <li><a class="dropdown-item" href="#">Long pants</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Masukan kata kunci" aria-label="Search" />
        <button class="btn btn-outline-dark" type="submit" style="margin-right: 20px">Search</button>
      </form>
    </div>
  </div>
</nav>
<script>
  $("#whats-new").click(function() {
    $("#header").load("view/navigasi/navbar.php");
    $("#content").load("view/whats-new/index.php");
    $("#footer").load("view/footer/footer.php");
  });
</script>