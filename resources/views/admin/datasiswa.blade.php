@extends('layout.main')

@section('container')
    <!-- Bagian Admin -->
    <h1><i class="bi bi-bar-chart-steps me-1"></i> Data Siswa</h1><hr><br>
    <div class="table-title">
        <div class="row">
            <div class="col"><caption> Data Pelatihan Siswa STCAMP404 :</caption></div>
            <div class="col-sm-12 mt-4">
                <form class="d-flex">
                    <div class="col-sm-8">
                        <a class="btn btn-outline-info text-dark me-4" role="group" data-bs-toggle="modal" data-bs-target="#Modal3"><i class="bi bi-person-plus-fill me-1"></i> Tambah</a>
                    </div>
                    <input class="form-control me-2" type="search" placeholder="Cari Data Siswa...." aria-label="Search">
                    <button class="btn btn-outline-success btn-group" role="group" id="ToastDefault7"><i class="bi bi-search me-1"></i> Cari</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bagian Admin Modal -->
    <!-- Pop Up Modal 3-->
    <div class="modal fade modalmenu" id="Modal3" tabindex="-1" aria-labelledby="Modal3Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-light">
                    <h5 class="modal-title"><i class="bi bi-person-plus-fill me-1"></i> Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-2" action="/data-pelatihan/add" method="POST">
                    @csrf                
                        <div class="col-md-12 mt-2">
                            <label for="exampleCreateNIS"><i class="bi bi-building me-1"></i> Nomor Induk Siswa</label>
                            <input type="number" name="nis" class="form-control mt-2" id="exampleCreateNIS" value="{{ $nis }}">
                        </div>
                        <div class="col-md-12 mt-4">
                            <label for="exampleCreateName"><i class="bi bi-person me-1"></i> Nama Pengguna</label>
                            <input type="text" name="nama_siswa" class="form-control mt-2" id="exampleCreateName" placeholder="Tulis nama lengkap..." required/>
                        </div>
                        <div class="col-md-12 mt-4">
                            <label for="exampleCreateCamp"><i class="bi bi-award me-1"></i> Pelatihan</label>
                            <div class="input-group mb-3 mt-2">
                                <label class="input-group-text" for="inputGroupSelect01">
                                    <small class="text-sm">Opsi:</small>
                                </label>
                                <select class="form-select text-sm" name="pelatihan" id="inputGroupSelect01">
                                    <option value="Bootstrap 5" selected class="text-sm">Bootstrap 5</option>
                                    <option value="Git" class="text-sm">Git</option>
                                    <option value="Laravel 8" class="text-sm">Laravel 8</option>
                                    <option value="Codeigniter 4" class="text-sm">Codeigniter 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-success mt-2">
                        <a class="btn btn-secondary btn-sm btncancel text-light" data-bs-dismiss="modal"><i class="bi bi-person-x me-1"></i> Batal</a>
                        <button type="submit" class="btn btn-primary btn-sm btnacc text-light"><i class="bi bi-person-check me-1"></i> Setuju</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Pop Up Modal 3-->

    <!-- Pop Up Modal 4-->
    <div class="modal fade modalmenu" id="Modal4" tabindex="-1" aria-labelledby="Modal4Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-light">
                    <h5 class="modal-title"><i class="bi bi-pencil-square me-1"></i> Ubah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-2">
                      <div class="col-md-12 mt-2">
                        <label for="exampleUpdateName"><i class="bi bi-person me-1"></i> Nama Pengguna</label>
                        <input type="name" class="form-control mt-2" id="exampleUpdateName" placeholder="Ubah nama...">
                      </div>
                      <div class="col-md-12 mt-4">
                        <label for="exampleCreateCamp"><i class="bi bi-award me-1"></i> Pelatihan</label>
                        <div class="input-group mb-3 mt-2">
                            <label class="input-group-text" for="inputGroupSelect02">
                                <small class="text-sm">Opsi Ubah:</small>
                            </label>
                            <select class="form-select text-sm" id="inputGroupSelect02">
                                <option value="1" selected class="text-sm">Bootstrap 5</option>
                                <option value="2" class="text-sm">Git</option>
                                <option value="3" class="text-sm">Laravel 8</option>
                                <option value="4" class="text-sm">Codeigniter 4</option>
                            </select>
                        </div>
                      </div>
                    </form>
                </div>
                <div class="modal-footer bg-success mt-2">
                    <a type="button" class="btn btn-secondary btn-sm btncancel text-light" data-bs-dismiss="modal">
                    <i class="bi bi-person-x me-1"></i> Batal</a>
                    <a type="submit" class="btn btn-primary btn-sm btnacc text-light" id="ToastDefault9">
                    <i class="bi bi-person-check me-1"></i> Setuju</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Pop Up Modal 4-->

    <!-- Pop Up Modal 5-->
    <div class="modal fade modalmenu" id="Modal5" tabindex="-1" aria-labelledby="Modal5Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-light">
                    <h5 class="modal-title"><i class="bi bi-trash3 me-1"></i> Hapus Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <small class="text-muted">Anda yakin ingin menghapus data yang memiliki ID = "<?= "1" ?>" ini ?</small>
                </div>
                <div class="modal-footer bg-success mt-2">
                    <a type="button" class="btn btn-secondary btn-sm btncancel text-light" data-bs-dismiss="modal">
                    <i class="bi bi-person-x me-1"></i> Batal</a>
                    <a type="submit" class="btn btn-primary btn-sm btnacc text-light" id="ToastDefault10">
                    <i class="bi bi-person-check me-1"></i> Setuju</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Pop Up Modal 5-->


    <!-- Bagian Admin Toast -->
    <!-- Toast 7 -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="DefToast7" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
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
    <!-- Akhir Toast 7 -->

    <!-- Toast 8 -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="DefToast8" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
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
    <!-- Akhir Toast 8 -->

    <!-- Toast 9 -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="DefToast9" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
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
    <!-- Akhir Toast 9 -->

    <!-- Toast 10 -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="DefToast10" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
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
    <!-- Akhir Toast 10 -->

    <script>
        // Bagian Admin
        const toastTrigger7 = document.getElementById('ToastDefault7')
        const toastLiveExample7 = document.getElementById('DefToast7')
        if (toastTrigger7) {
            toastTrigger7.addEventListener('click', () => {
                const toast7 = new bootstrap.Toast(toastLiveExample7)
                toast7.show()
            })
        }
        const toastTrigger8 = document.getElementById('ToastDefault8')
        const toastLiveExample8 = document.getElementById('DefToast8')
        if (toastTrigger8) {
            toastTrigger8.addEventListener('click', () => {
                const toast8 = new bootstrap.Toast(toastLiveExample8)
                toast8.show()
            })
        }
        const toastTrigger9 = document.getElementById('ToastDefault9')
        const toastLiveExample9 = document.getElementById('DefToast9')
        if (toastTrigger9) {
            toastTrigger9.addEventListener('click', () => {
                const toast9 = new bootstrap.Toast(toastLiveExample9)
                toast9.show()
            })
        }
        const toastTrigger10 = document.getElementById('ToastDefault10')
        const toastLiveExample10 = document.getElementById('DefToast10')
        if (toastTrigger10) {
            toastTrigger10.addEventListener('click', () => {
                const toast10 = new bootstrap.Toast(toastLiveExample10)
                toast10.show()
            })
        }
    </script>


    @if ($msgAdmin = Session::get('addAdminNotif'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            <small class="text-muted"><i class="bi bi-info-square-fill me-1"></i>
                {{ $msgAdmin }}
            </small>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($msgAdmin = Session::get('updateAdminNotif'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            <small class="text-muted"><i class="bi bi-info-square-fill me-1"></i>
                {{ $msgAdmin }}
            </small>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($msgAdmin = Session::get('deleteAdminNotif'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            <small class="text-muted"><i class="bi bi-info-square-fill me-1"></i>
                {{ $msgAdmin }}
            </small>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <br>    


    <table class="table table-striped table-hover table-bordered caption-top mt-3 col-sm-12 table-responsive">
        <thead class="table-success">
            <tr>
                <th scope="col">Nomor Induk Siswa</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Ambil Pelatihan</th>
                <th scope="col">Dibuat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $v)
            <tr>
                <td>{{ $v->nis }}</td>
                <td>{{ $v->nama_siswa }}</td>
                <td>{{ $v->pelatihan }}</td>
                <td>{{ $v->created_at }}</td>
                <td>
                    <div class="d-grid gap-2">
                        <a class="btn btn-outline-warning btn-sm text-dark" data-bs-toggle="modal" data-bs-target="#Modal4">
                            <i class="bi bi-pencil-square me-1"></i> Ubah</a>
                        <a class="btn btn-outline-danger btn-sm text-dark" data-bs-toggle="modal" data-bs-target="#Modal5">
                            <i class="bi bi-trash3 me-1"></i> Hapus</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><<</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">>></a></li>
        </ul>
    </nav>
@endsection