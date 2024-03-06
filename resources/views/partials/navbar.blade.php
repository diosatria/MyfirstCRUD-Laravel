<nav class="navbar navbar-expand-lg nabar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src=" {{ asset('img/diologo.png') }}" width="60">Dio Factory</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === ('Dashboard') ? 'active' : '') }}" aria-current="page" href="/product">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === ('Buat') ? 'active' : '') }}" aria-current="page" href="/product/create">Buat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === ('Edit Produk') ? 'active' : '') }}" aria-current="page" href="/product/4/edit">Edit</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lainnya..
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/about">About Me</a></li>
            </ul>
          </li>

        </ul>
        <form action="{{ route('product.search') }}" method="GET" class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Cari Kebutuhanmu" aria-label="Search" name="query">
          <button class="btn btn-outline-danger" type="submit">Telusuri</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- CSS  -->
  <style>
    /* Navbar */
    .navbar-brand {
        color: rgb(250, 250, 250) !important; /* Ubah warna teks menjadi kuning */
        font: helvetica;
    }
    .navbar-nav .nav-link {
        color: white !important; /* Mengubah warna tautan menjadi putih */
    }

    .navbar-nav .nav-link:hover {
        color: rgb(201, 201, 201) !important; /* Mengubah warna tautan menjadi kuning saat dihover */
    }
  </style>
