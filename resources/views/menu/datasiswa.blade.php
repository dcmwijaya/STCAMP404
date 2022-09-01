@extends('layout.main')

@section('container')
    <h1><i class="bi bi-bar-chart-steps me-1"></i> Data Siswa</h1><hr><br>
    <div class="table-title">
        <div class="row">
            <div class="col-sm-8"><caption> Data Pelatihan Siswa STCAMP404 :</caption></div>
            <div class="col-sm-4">
                <form class="d-flex">
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Jaya Mangunati</td>
                <td>20220101</td>
                <td>Bootstrap 5</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jadiyan Marto</td>
                <td>20220102</td>
                <td>Codeigniter 4</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Chondro Aminoto</td>
                <td>20220103</td>
                <td>Git</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Gatot Subroto</td>
                <td>20220104</td>
                <td>Laravel 8</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Jihan Minarti</td>
                <td>20220105</td>
                <td>Codeigniter 4</td>
            </tr>
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