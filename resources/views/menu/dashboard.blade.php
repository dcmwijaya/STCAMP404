@extends('layout.main')

@section('container')
    <h1><i class="bi bi-person-rolodex me-1"></i> Dashboard</h1><hr><br>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="{{ url('../assets/img/profile/cewek.jpg') }}" class="img-fluid rounded-start img-profile" alt="gambarpengguna">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Profil Pengguna</h5><hr>
                            <p class="card-text mt-5"><i class="bi bi-person-fill me-1"></i> Nama&emsp;:&emsp;<br><?= "Data Masih Dummy" ?></p>
                            <p class="card-text mt-5"><i class="bi bi-envelope-fill me-1"></i> Email&emsp;:&emsp;<br><?= "dummy@stcamp404.com" ?></p>
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
                                        <a class="btn btn-sm btn-outline-success" href="#">
                                    <i class="bi bi-person-bounding-box"></i></a></small></p>
                                </div>
                                <div class="col">
                                    <p><small class="text-muted"><i class="bi bi-dot me-1"></i> Data Siswa 
                                        <a class="btn btn-sm btn-outline-success" href="{{ url('/data-siswa') }}">
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
@endsection