<?php

namespace App\Http\Controllers;

use App\Models\DBU as DBU;
use App\Models\DBS as DBS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    public function __construct(DBU $dbu, DBS $dbs)
    {
        $this->db = $dbu;
        $this->dbs = $dbs;
    }

    public function index()
    {
        if (Session::has('LogSession')) {
            $LogUser = $this->db->where('id', '=', Session::get('LogSession'))->first();
            $value = $this->dbs->select('nis','nama_siswa','pelatihan','created_at')->where('nis', '=', $LogUser->siswa_id)->distinct()->get();
            $readDB = $this->dbs->select('nis','nama_siswa','pelatihan','created_at')->where('nis', '=', $LogUser->siswa_id)->distinct()->paginate(5);
            $value = [
                'value' => $readDB
            ];
        }
        
        return view('siswa.datasiswa', $value);
    }

    public function create(Request $reqdata)
    {
        $insertdata = $reqdata->all();
        $this->dbs->create($insertdata);
        $msg = 'Anda berhasil menambahkan data pelatihan!!';
        return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
    }
}
