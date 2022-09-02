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
                        <a type="submit" class="btn btn-outline-info text-dark me-4" role="group"><i class="bi bi-person-plus-fill me-1"></i> Tambah</a>
                    </div>
                    <input class="form-control me-2" type="search" placeholder="Cari Data Siswa...." aria-label="Search">
                    <button class="btn btn-outline-success btn-group" role="group" type="submit"><i class="bi bi-search me-1"></i> Cari</button>
                </form>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover table-bordered caption-top mt-3 col-sm-12 table-responsive">
        <thead class="table-success">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Nomor Induk Siswa</th>
                <th scope="col">Ambil Pelatihan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $v)
            <tr>
                <td scope="row">{{ $v->id }}</td>
                <td>{{ $v->nama_siswa }}</td>
                <td>{{ $v->nis }}</td>
                <td>{{ $v->pelatihan }}</td>
                <td>
                    <div class="d-grid gap-2">
                        <a type="submit" class="btn btn-outline-warning btn-sm text-dark"><i class="bi bi-pencil-square me-1"></i> Ubah</a>
                        <a type="submit" class="btn btn-outline-danger btn-sm text-dark"><i class="bi bi-trash3 me-1"></i> Hapus</a>
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

    <!-- Bagian Siswa -->
    <div class="table-title">
        <div class="row">
            <div class="col"><caption> Data Pelatihan Anda :</caption></div>
            <div class="col-sm-12 mt-4">
                <form class="d-flex">
                    <div class="col-sm-8">
                        <a type="submit" class="btn btn-outline-info text-dark me-4" role="group"><i class="bi bi-person-plus-fill me-1"></i> Tambah</a>
                    </div>
                    <input class="form-control me-2" type="search" placeholder="Cari Data Siswa...." aria-label="Search">
                    <button class="btn btn-outline-success btn-group" role="group" type="submit"><i class="bi bi-search me-1"></i> Cari</button>
                </form>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover table-bordered caption-top mt-3 col-sm-12 table-responsive">
        <thead class="table-success">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Induk Siswa</th>
                <th scope="col">Pelatihan yang diikuti</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $v)
            <tr>
                <td scope="row">{{ $v->id }}</td>
                <td>{{ $v->nis }}</td>
                <td>{{ $v->pelatihan }}</td>
                <td>
                    <div class="d-grid gap-2">
                        <a type="submit" class="btn btn-outline-warning btn-sm text-dark"><i class="bi bi-pencil-square me-1"></i> Ubah</a>
                        <a type="submit" class="btn btn-outline-danger btn-sm text-dark"><i class="bi bi-trash3 me-1"></i> Hapus</a>
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