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
        <a class="btn btn-outline-success masuk" type="submit" id="ToastDefault4"><i class="bi bi-door-open me-1"></i> Masuk</a>
      </form>
    </div>
  </div>
</nav>
<!-- Navbar Akhir -->

<!-- Toast 4 -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="DefToast4" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success">
            <strong class="me-auto text-light"><i class="bi bi-exclamation-octagon"></i> STCAMP404</strong>
            <small class="text-light">informasi</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <i class="bi bi-caret-right-fill"></i> Fungsi belum ditambahkan oleh admin!
        </div>
    </div>
</div>
<!-- Akhir Toast 4 -->

<script>
    const toastTrigger4 = document.getElementById('ToastDefault4')
    const toastLiveExample4 = document.getElementById('DefToast4')
    if (toastTrigger4) {
        toastTrigger4.addEventListener('click', () => {
            const toast4 = new bootstrap.Toast(toastLiveExample4)
            toast4.show()
        })
    }
</script>