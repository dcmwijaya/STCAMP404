<?php

namespace App\Http\Controllers;

use App\Models\DBS;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $readDB = DBS::all();
        return view('menu.datasiswa', ['data' => $readDB]);
        
    }

    public function create(Request $reqdata)
    {
        $insertdata = $reqdata->all();
        DBS::create($insertdata);
        // $pesan = 'Anda berhasil menambahkan data pelatihan!!';
        // return redirect()->route('menu.datasiswa')->with('addnotif', $pesan);
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
