<?php

namespace App\Http\Controllers;

use App\Models\DBS;
use App\Models\PEL;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $nis = '202201';
        $readDB = DBS::all();
        $readPEL = PEL::all();
        $data = [
            'nis' => $nis,
            'data' => $readDB,
            'pel' => $readPEL
        ];
        return view('admin.datapelatihan', $data);
    }

    public function create(Request $reqdata)
    {
        $getdata = $reqdata->all();
        DBS::create($getdata);
        $msg = ' Selamat anda berhasil menambahkan data siswa!!';
        return redirect()->route('data-pelatihan')->with('addAdminNotif', $msg);
    }

    public function update(Request $reqdata, $id)
    {
        $findID = DBS::find($id);
        $findID->update($reqdata->all());
        $msg = ' Selamat anda berhasil mengubah data siswa!!';
        return redirect()->route('data-pelatihan')->with('updateAdminNotif', $msg);
    }

    public function delete($id)
    {
        $findID = DBS::find($id);
        $findID->delete();
        $msg = ' Selamat anda berhasil menghapus data siswa!!';
        return redirect()->route('data-pelatihan')->with('deleteAdminNotif', $msg);
    }
}
