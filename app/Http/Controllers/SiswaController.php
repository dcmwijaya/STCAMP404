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

    public function index(Request $reqdata)
    {
        if ($reqdata->has('search')) {
            $search = $this->db->where('nis', 'LIKE', '%' . $reqdata->search . '%')->orWhere('nama_siswa', 'LIKE', '%' . $reqdata->search . '%')->orWhere('pelatihan', 'LIKE', '%' . $reqdata->search . '%')->orWhere('created_at', 'LIKE', '%' . $reqdata->search . '%');
            $searchData = $search->paginate(5);
            $data = [
                'data' => $searchData
            ];
        } else {
            $readDB = $this->db->paginate(5);
            $data = [
                'data' => $readDB
            ];
        }
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
