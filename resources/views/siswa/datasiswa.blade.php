@extends('layout.main')

@section('container')
    <!-- Bagian Siswa -->
    <div class="table-title">
        <div class="row">
            <div class="col"><caption> Data Pelatihan Anda :</caption></div>
            <div class="col-sm-12 mt-4">
                <form class="d-flex">
                    <div class="col-sm-8">
                        <a class="btn btn-outline-info text-dark me-4" role="group" data-bs-toggle="modal" data-bs-target="#Modal6">
                            <i class="bi bi-person-plus-fill me-1"></i> Tambah</a>
                    </div>
                    <input class="form-control me-2" type="search" placeholder="Cari Data Siswa...." aria-label="Search">
                    <button class="btn btn-outline-success btn-group" role="group" id="ToastDefault10"><i class="bi bi-search me-1"></i> Cari</button>
                </form>
            </div>
        </div>
    </div>
    @if ($msgSiswa = Session::get('addSiswaNotif'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            <small class="text-muted"><i class="bi bi-info-square-fill me-1"></i>
                {{ $msgSiswa }}
            </small>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-striped table-hover table-bordered caption-top mt-3 col-sm-12 table-responsive">
        <thead class="table-success">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Induk Siswa</th>
                <th scope="col">Pelatihan yang diikuti</th>
                <th scope="col">Waktu Daftar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            @foreach($data as $v)
            <tr>
                <td scope="row">{{ $i++ }}</td>
                <td>{{ $v->nis }}</td>
                <td>{{ $v->pelatihan }}</td>
                <td>{{ $v->created_at }}</td>
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

    <!-- Bagian Siswa Modal -->
     <!-- Pop Up Modal 6-->
    <div class="modal fade modalmenu" id="Modal6" tabindex="-1" aria-labelledby="Modal6Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-light">
                    <h5 class="modal-title"><i class="bi bi-person-plus-fill me-1"></i> Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-2">
                      <div class="col-md-12 mt-2">
                        <label for="exampleCreateName"><i class="bi bi-person me-1"></i> Nama Pengguna</label>
                        <input type="name" class="form-control mt-2" id="exampleCreateName" placeholder="Masukan nama lengkap anda...">
                      </div>
                      <div class="col-md-12 mt-4">
                        <label for="exampleCreateCamp"><i class="bi bi-award me-1"></i> Pelatihan</label>
                        <div class="input-group mb-3 mt-2">
                            <label class="input-group-text" for="inputGroupSelect01">
                                <small class="text-sm">Opsi:</small>
                            </label>
                            <select class="form-select text-sm" id="inputGroupSelect01">
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
                    <a type="submit" class="btn btn-primary btn-sm btnacc text-light" id="ToastDefault11">
                    <i class="bi bi-person-check me-1"></i> Setuju</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Pop Up Modal 3-->

    <!-- Bagian Siswa Toast -->
    <!-- Toast 11 -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="DefToast11" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
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
    <!-- Akhir Toast 11 -->

    <script>
        // Bagian Siswa
        const toastTrigger11 = document.getElementById('ToastDefault11')
        const toastLiveExample11 = document.getElementById('DefToast11')
        if (toastTrigger11) {
            toastTrigger11.addEventListener('click', () => {
                const toast11 = new bootstrap.Toast(toastLiveExample11)
                toast11.show()
            })
        }
    </script>
@endsection