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
        <input type="hidden" name="siswa_id" id="fsiswa_id" required>
        <div class="col-xl-12">
            <div class="col-md-6 mt-4 input-sm">
                <label for="email"><i class="bi bi-envelope me-1"></i> Email</label>
                <input id="femail" type="email" class="form-control mt-3 @error('femail') is-invalid @enderror" name="email" placeholder="Masukan email anda..." autofocus required>
                @error('femail')
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
                    <button onclick="ShowPassForget()" class="btn btn-outline-secondary" type="button">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <input id="fpassword" type="password" class="form-control @error('fpassword') is-invalid @enderror" name="password" placeholder="Masukan kata sandi baru..." required>
                    @error('fpassword')
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
                    <button onclick="ShowPassConfirmForget()" class="btn btn-outline-secondary" type="button">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <input id="fpassword-confirm" type="password" class="form-control @error('fpassword') is-invalid @enderror" name="password_confirmation" placeholder="Konfirmasi kata sandi baru..." required>
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
    function ShowPassForget() {
        var x = document.getElementById("fpassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function ShowPassConfirmForget() {
        var x = document.getElementById("fpassword-confirm");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <!-- Akhir Show Password-->
@endsection