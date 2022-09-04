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
        return view('admin.datasiswa', $data);
    }

    public function create(Request $reqdata)
    {
        $getdata = $reqdata->all();
        DBS::create($getdata);
        $msg = ' Selamat anda berhasil menambahkan data siswa!!';
        return redirect()->route('data-pelatihan')->with('addAdminNotif', $msg);
    }

    public function update($id)
    {
        $data = DBS::find($id);
        dd($data);
        $msg = ' Selamat anda berhasil mengubah data siswa!!';
        return redirect()->route('data-pelatihan')->with('updateAdminNotif', $msg);
    }

    public function delete($id)
    {
        $data = DBS::deleteData();
        $msg = ' Selamat anda berhasil menghapus data siswa!!';
        return redirect()->route('data-pelatihan')->with('deleteAdminNotif', $msg);
    }
}
