<?php

namespace App\Http\Controllers;

use App\Models\DBS;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $rDB = DBS::all();
        $data = [
            'data' => $rDB
        ];
        return view('siswa.datasiswa', $data);
    }

    public function create(Request $reqdata)
    {
        $insertdata = $reqdata->all();
        DBS::create($insertdata);
        $msg = 'Anda berhasil menambahkan data pelatihan!!';
        return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
    }
}
