@extends('layout.main')

@section('container')
    <h1><i class="bi bi-person-lines-fill me-1"></i> Registrasi</h1><hr>
    <form class="form-group row">
        <div class="col-xl-12">
            <div class="col-md-6 mt-4 input-sm">
                <label for="RegisterName"><i class="bi bi-envelope me-1"></i> Nama</label>
                <input type="name" name="name" class="form-control mt-2" id="RegisterName" placeholder="Masukan nama anda..." required autofocus>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="col-md-6 mt-4 input-sm">
                <label for="RegisterEmail"><i class="bi bi-envelope me-1"></i> Email</label>
                <input type="email" name="email" class="form-control mt-2" id="RegisterEmail" aria-describedby="emailHelp" placeholder="Masukan email anda..." required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mt-4 input-sm me-4">
                <label for="RegisterPassword1"><i class="bi bi-key me-1"></i> Kata Sandi</label>
                <div class="input-group mb-3 mt-2">
                    <button onclick="ShowPassRegister()" class="btn btn-outline-secondary" type="button">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <input type="password" id="myInput2" name="password" class="form-control" placeholder="Masukan kata sandi anda..." required>
                </div>
                <div class="col-md-12 mt-2">
                  <a href="#" class="login" data-bs-toggle="modal" data-bs-target="#ModalLogin">
                    Sudah Punya Akun ? Login Sekarang <i class="bi bi-patch-exclamation-fill"></i>
                  </a>
                </div>
            </div>
            <div class="col-md-3 mt-4 input-sm">
                <label for="RegisterPassword2"><i class="bi bi-key me-1"></i> Konfirmasi Sandi</label>
                <div class="input-group mb-3 mt-2">
                    <button onclick="ShowPassConfirmRegister()" class="btn btn-outline-secondary" type="button">
                    <i class="bi bi-eye-fill"></i>
                    </button>
                    <input type="password" id="myInput3" name="password" class="form-control" placeholder="Konfirmasi kata sandi anda..." required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mt-4 input-sm">
                <a type="submit" class="btn btn-outline-success btn-sm btnreg" id="ToastDefault5">
                <i class="bi bi-person-lines-fill me-1"></i> Registrasi</a>
            </div>
        </div>
    </form>

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
        const toastTrigger5 = document.getElementById('ToastDefault5')
        const toastLiveExample5 = document.getElementById('DefToast5')
        if (toastTrigger5) {
            toastTrigger5.addEventListener('click', () => {
                const toast5 = new bootstrap.Toast(toastLiveExample5)
                toast5.show()
            })
        }
    </script>

    <!-- Akhir Show Password-->
    <script>
    function ShowPassRegister() {
        var x = document.getElementById("myInput2");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function ShowPassConfirmRegister() {
        var x = document.getElementById("myInput3");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <!-- Akhir Show Password-->
@endsection