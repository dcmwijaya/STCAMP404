@extends('layout.main')

@section('container')
    <h1><i class="bi bi-patch-question"></i> Lupa Password</h1><hr>

    <!-- Session Alert Admin -->
    @if ($msgForget = Session::get('forgetNotif'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            <small class="text-muted"><i class="bi bi-info-square-fill me-1"></i>
                {{ $msgForget }}
            </small>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Session Alert Admin -->
    

    <form class="form-group row" action="{{ url('/resetUser') }}" method="POST">
        @csrf
        <div class="col-xl-12">
            <div class="col-md-6 mt-4 input-sm">
                <label for="email"><i class="bi bi-envelope me-1"></i> Email</label>
                <input id="email" type="email" class="form-control mt-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukan email anda..." autofocus>
                @error('email')
                    <span class="text-danger invalid-feedback" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <strong> Kesalahan penulisan email !</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mt-5 input-sm me-4">
                <label for="password"><i class="bi bi-key me-1"></i> Kata Sandi</label>
                <div class="input-group mb-3 mt-2">
                    <button onclick="ShowPassRegister()" class="btn btn-outline-secondary" type="button">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukan kata sandi baru...">
                    @error('password')
                        <span class="text-danger invalid-feedback" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <strong> Password salah: gagal konfirmasi!</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-3 mt-5 input-sm">
                <label for="password-confirm"><i class="bi bi-key me-1"></i> Konfirmasi Sandi</label>
                <div class="input-group mb-3 mt-2">
                    <button onclick="ShowPassConfirmRegister()" class="btn btn-outline-secondary" type="button">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi kata sandi baru...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mt-4 input-sm">
                <button type="submit" class="btn btn-outline-success btn-md btnreg"><i class="bi bi-pencil-fill me-1"></i> Reset Password</button>
            </div>
        </div>
    </form>


    <!-- Show Password-->
    <script>
    function ShowPassRegister() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function ShowPassConfirmRegister() {
        var x = document.getElementById("password-confirm");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <!-- Akhir Show Password-->
@endsection