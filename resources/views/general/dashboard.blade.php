@extends('layout.main')

@section('container')
    <h1><i class="bi bi-person-rolodex me-1"></i> Dashboard</h1><hr>
    @if (session('status'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <small class="text-muted"><i class="bi bi-info-square-fill me-1"></i> Hai <strong> 
                {{-- {{ Auth::user()->name }} --}}
                </strong> selamat datang di menu utama website STCAMP404.</small>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <br>    
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="{{ url('asset/img/profile/cewek.jpg') }}" class="img-fluid rounded-start img-profile" alt="gambarpengguna">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Profil Pengguna</h5><hr>
                            <p class="card-text mt-2">
                                <strong><i class="bi bi-building me-1"></i> Nomor Induk Siswa :</strong><br>
                                <?= "20220101" ?></p>
                            <p class="card-text mt-2">
                                <strong><i class="bi bi-person me-1"></i> Nama :</strong><br>
                                <?= "Data Masih Dummy" ?></p>
                            <p class="card-text mt-2">
                                <strong><i class="bi bi-envelope me-1"></i> Email :</strong><br>
                                <?= "dummy@stcamp404.com" ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h5><i class="bi bi-grid-1x2-fill me-1"></i> Pengaturan</h5><hr><br>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="bi bi-caret-right-fill me-1"></i> Akses Cepat
                    </button>
                    </h3>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body mt-1">
                            <div class="row">
                                <div class="col">
                                    <p><small class="text-muted"><i class="bi bi-dot me-1"></i> Ubah Profil 
                                        <a class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#Modal2">
                                    <i class="bi bi-person-bounding-box"></i></a></small></p>
                                </div>
                                <div class="col">
                                    <p><small class="text-muted"><i class="bi bi-dot me-1"></i> Data Siswa 
                                        <a class="btn btn-sm btn-outline-success" href="{{ url('/data-pelatihan') }}">
                                        {{-- <a class="btn btn-sm btn-outline-success" href="{{ url('/data-siswa') }}"> --}}
                                    <i class="bi bi-bar-chart-steps"></i></a></small></p>
                                </div>
                                <div class="col">
                                    <p><small class="text-muted"><i class="bi bi-dot me-1"></i> Info Pelatihan 
                                        <a class="btn btn-sm btn-outline-success" href="{{ url('/info-kegiatan') }}">
                                    <i class="bi bi-megaphone-fill"></i></a></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="bi bi-caret-right-fill me-1"></i> Pelatihan yang diikuti
                    </button>
                    </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body mt-2">
                            <p><small class="text-muted"><i class="bi bi-dot me-1"></i> Pelatihan_Dummy_1</small></p>
                            <p><small class="text-muted"><i class="bi bi-dot me-1"></i> Pelatihan_Dummy_2</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pop Up Modal 2-->
    <div class="modal fade modalmenu" id="Modal2" tabindex="-1" aria-labelledby="Modal2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-light">
                    <h5 class="modal-title"><i class="bi bi-person-bounding-box me-1"></i> Ubah Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-2">
                      <div class="col-md-12 mt-2">
                        <label for="exampleUpdateName"><i class="bi bi-person me-1"></i> Nama Pengguna</label>
                        <input type="name" class="form-control" id="exampleUpdateName" placeholder="Ubah nama anda...">
                      </div>
                      <div class="col-md-12 mt-4">
                        <label for="exampleUpdateEmail"><i class="bi bi-envelope me-1"></i> Email Pengguna</label>
                        <input type="email" class="form-control" id="exampleUpdateEmail" aria-describedby="emailHelp" placeholder="Ubah email anda...">
                      </div>
                    </form>
                </div>
                <div class="modal-footer bg-success mt-2">
                    <a type="button" class="btn btn-secondary btn-sm btncancel text-light" data-bs-dismiss="modal">
                    <i class="bi bi-person-x me-1"></i> Batal</a>
                    <a type="submit" class="btn btn-primary btn-sm btnacc text-light" id="ToastDefault6">
                    <i class="bi bi-person-check me-1"></i> Setuju</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Pop Up Modal 2-->

    <!-- Toast 6 -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="DefToast6" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
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
    <!-- Akhir Toast 6 -->

    <script>
        const toastTrigger6 = document.getElementById('ToastDefault6')
        const toastLiveExample6 = document.getElementById('DefToast6')
        if (toastTrigger6) {
            toastTrigger6.addEventListener('click', () => {
                const toast6 = new bootstrap.Toast(toastLiveExample6)
                toast6.show()
            })
        }
    </script>
@endsection