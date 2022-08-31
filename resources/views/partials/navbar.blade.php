<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light mainnavcolor">
  <div class="container-fluid">
    <a class="navbar-brand nav-link disabled fw-bold" href="#"><i class="bi bi-book-half me-2"></i> STCAMP404</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}"><i class="bi bi-house-fill me-1"></i> Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/data-siswa') }}"><i class="bi bi-bar-chart-steps me-1"></i> Data Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/info-kegiatan') }}"><i class="bi bi-megaphone-fill me-1"></i> Info Kegiatan</a>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn btn-outline-success masuk" type="submit"><i class="bi bi-door-open me-1"></i> Masuk</button>
      </form>
    </div>
  </div>
</nav>
<!-- Navbar Akhir -->