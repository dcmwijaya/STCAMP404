<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light mainnavcolor">
  <div class="container-fluid">
    <a class="navbar-brand nav-link disabled fw-bold" href="#"><i class="bi bi-book-half me-2"></i> {{ config('app.name', 'STCAMP404') }}</a>
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
        <a class="btn btn-outline-success masuk" data-bs-toggle="modal" data-bs-target="#Modal1"><i class="bi bi-door-open me-1"></i> Masuk</a>
        <a class="btn btn-outline-success keluar" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="bi bi-door-closed me-1"></i> Keluar
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
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
          <form class="row g-2" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="col-md-12">
              <label for="email" class="col-form-label text-md-end"><i class="bi bi-envelope me-1"></i> Email</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid 
              @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp"
              placeholder="Masukan email anda..." required autocomplete="email" autofocus>@error('email')
              <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
              @enderror
            </div>
            <div class="col-md-6 mt-2">
              <label for="password" class="col-form-label text-md-end"><i class="bi bi-key me-1"></i> Kata Sandi</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid
              @enderror" name="password" required autocomplete="current-password" placeholder="Masukan kata sandi anda...">
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror

              <div class="col-md-12 mt-2">
                @if (Route::has('password.request'))
                  <a class="lupas" href="{{ route('password.request') }}">
                    Lupa Password <i class="bi bi-patch-question"></i>
                  </a>
                @endif
              </div>
            </div>
            <div class="col-md-6 mt-4" style="padding: 32px">
              <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    Setuju & Ingat!!
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer bg-success">
            <a type="button" class="btn btn-outline-warning btn-sm btnreg" href="{{ url('../registrasi') }}">
            <i class="bi bi-person-lines-fill me-1"></i> <span class="fontreg">Registrasi</span></a>
            <a type="submit" class="btn btn-outline-info btn-sm btnmasuk">
            <i class="bi bi-door-open me-1"></i> <span class="fontmasuk">Masuk</span></a>
        </div>
      </form>
    </div>
</div>
<!-- Akhir Pop Up Modal 1-->