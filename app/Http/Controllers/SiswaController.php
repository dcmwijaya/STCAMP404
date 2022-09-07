<?php

namespace App\Http\Controllers;

use App\Models\DBS as DBS;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct(DBS $db)
    {
        $this->db = $db;
    }

    public function index()
    {
        $rDB = $this->db->all();
        $data = [
            'data' => $rDB
        ];
        return view('siswa.datasiswa', $data);
    }

    public function create(Request $reqdata)
    {
        $insertdata = $reqdata->all();
        $this->db->create($insertdata);
        $msg = 'Anda berhasil menambahkan data pelatihan!!';
        return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
    }
}
