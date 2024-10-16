<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#"
      ><img
        id="MDB-logo"
        src="https://mdbcdn.b-cdn.net/wp-content/uploads/2018/06/logo-mdb-jquery-small.png"
        alt="MDB Logo"
        draggable="false"
        height="30"
    /></a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link mx-2" href="#!"><i class="fas fa-home pe-2"></i>Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="#!"><i class="fas fa-cogs pe-2"></i>Fitur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="#!"><i class="fas fa-info-circle pe-2"></i>Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="#!"><i class="fas fa-newspaper pe-2"></i>Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="#!"><i class="fas fa-tags pe-2"></i>Harga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="{{ url('/pelanggan') }}"><i class="fas fa-users pe-2"></i>Data Pelanggan</a>
        </li>
        <li class="nav-item ms-3">
          <a class="btn btn-black btn-rounded" href="{{ url('/login') }}"><i class="fas fa-sign-in-alt pe-2"></i>Sign in</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar -->
