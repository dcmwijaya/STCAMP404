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
          <a class="nav-link" href="{{ url('/dashboard') }}"><i class="bi bi-person-rolodex me-1"></i> Dashboard</a>
        </li>
      </ul>
      <form class="d-flex">
        <a class="btn btn-outline-success masuk" type="submit" data-bs-toggle="modal" data-bs-target="#Modal1"><i class="bi bi-door-open me-1"></i> Masuk</a>
        <a class="btn btn-outline-success keluar" type="submit" href="{{ url('/') }}"><i class="bi bi-door-closed me-1"></i> Keluar</a>
      </form>
    </div>
  </div>
</nav>
<!-- Navbar Akhir -->

  <!-- Pop Up Modal 1-->
    <div class="modal fade modallogin" id="Modal1" tabindex="-1" aria-labelledby="Modal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-light">
                    <h5 class="modal-title"><i class="bi bi-door-open me-1"></i> Masuk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-2">
                      <div class="col-md-12">
                        <label for="exampleInputEmail1"><i class="bi bi-envelope me-1"></i> Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email anda...">
                      </div>
                      <div class="col-md-6 mt-4">
                        <label for="exampleInputPassword1"><i class="bi bi-key me-1"></i> Kata Sandi</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan kata sandi anda...">
                        <div class="lupas col-md-12 mt-3">
                          <a type="button" class="lupas" id="ToastDefault4">Lupa Password <i class="bi bi-patch-question"></i></a>
                        </div>
                      </div>
                      <div class="col-md-6 mt-4" style="padding: 32px">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Setuju</label>
                        </div>
                      </div>
                    </form>
                </div>
                <div class="modal-footer bg-success">
                    <a type="button" class="btn btn-outline-warning btn-sm btnreg" href="{{ url('../registrasi') }}">
                    <i class="bi bi-person-lines-fill me-1"></i> <span class="fontreg">Registrasi</span></a>
                    <a type="submit" class="btn btn-outline-info btn-sm btnmasuk" id="ToastDefault5">
                    <i class="bi bi-door-open me-1"></i> <span class="fontmasuk">Masuk</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Pop Up Modal 1-->

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

<!-- Toast 5 -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="DefToast5" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
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
<!-- Akhir Toast 5 -->

<script>
    const toastTrigger4 = document.getElementById('ToastDefault4')
    const toastLiveExample4 = document.getElementById('DefToast4')
    if (toastTrigger4) {
        toastTrigger4.addEventListener('click', () => {
            const toast4 = new bootstrap.Toast(toastLiveExample4)
            toast4.show()
        })
    }
    const toastTrigger5 = document.getElementById('ToastDefault5')
    const toastLiveExample5 = document.getElementById('DefToast5')
    if (toastTrigger5) {
        toastTrigger5.addEventListener('click', () => {
            const toast5 = new bootstrap.Toast(toastLiveExample5)
            toast5.show()
        })
    }
</script>