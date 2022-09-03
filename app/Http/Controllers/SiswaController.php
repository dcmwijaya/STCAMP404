<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function datasiswacamp404()
    {
        $data = Siswa::allData();
        return view('menu.datasiswa', ['data' => $data]);
    }

    public function create($datasiswa)
    {
        $data = Siswa::createData();
        return view('menu.datasiswa', ['data' => $data]);
    }

    public function update($id)
    {
        $data = Siswa::updateData();
        return view('menu.datasiswa', ['data' => $data]);
    }

    public function delete($id)
    {
        $data = Siswa::deleteData();
        return view('menu.datasiswa', ['data' => $data]);
    }
}
