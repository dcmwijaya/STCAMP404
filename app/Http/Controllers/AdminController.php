<?php

namespace App\Http\Controllers;

use App\Models\DBS;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $nis = '202201';
        $readDB = DBS::all();
        $data = [
            'nis' => $nis,
            'data' => $readDB
        ];
        return view('menu.datasiswa', $data);
    }

    public function create(Request $reqdata)
    {
        $getdata = $reqdata->all();
        DBS::create($getdata);
        $msg = ' Selamat anda berhasil menambahkan data siswa!!';
        return redirect()->route('data-siswa')->with('addAdminNotif', $msg);
    }

    public function update($id)
    {
        $data = DBS::updateData();
        return view('menu.datasiswa', ['datasiswa2' => $data]);
    }

    public function delete($id)
    {
        $data = DBS::deleteData();
        return view('menu.datasiswa', ['datasiswa3' => $data]);
    }
}
