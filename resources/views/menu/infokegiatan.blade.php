@extends('layout.main')

@section('container')
    <h1><i class="bi bi-megaphone-fill me-1"></i> Info Kegiatan</h1><hr><br>
    <div class="table-title">
        <div class="row">
            <div class="col-sm-8"><caption> Info Kegiatan STCAMP404 :</caption></div>
            <div class="col-sm-4">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Cari Info...." aria-label="Search">
                    <button class="btn btn-outline-success btn-group" role="group" type="submit"><i class="bi bi-search me-1"></i> Cari</button>
                </form>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover table-bordered caption-top mt-3 col-sm-12 table-responsive">
        <thead class="table-success">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Pelatihan</th>
                <th scope="col">Waktu Pelaksanaan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Bootstrap 5</td>
                <td>02/10/2022</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Codeigniter 4</td>
                <td>12/10/2022</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Git</td>
                <td>18/10/2022</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Laravel 8</td>
                <td>05/11/2022</td>
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