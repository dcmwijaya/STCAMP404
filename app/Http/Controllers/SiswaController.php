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

    public function create(Request $reqData)
    {
        if (Session::has('LogSession')) {
            $LogUser = $this->db->where('id', '=', Session::get('LogSession'))->first();
            $PelatihanSiswaSTCAMP404 = $this->dbs->select('pelatihan')->where('nis', $LogUser->siswa_id)->distinct()->get();
        }
        if ($PelatihanSiswaSTCAMP404->where('pelatihan', 'Bootstrap 5')) {
            if($PelatihanSiswaSTCAMP404 != $reqData->pelatihan){
                return redirect()->route('data-siswa');
            } else{
                $this->dbs->create([
                    'nis' => $reqData->nis,
                    'nama_siswa' => $reqData->nama_siswa,
                    'pelatihan' => $reqData->pelatihan
                ]);
                $msg = 'Anda berhasil menambahkan data pelatihan!!';
                return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
            }
        } else if ($reqData->pelatihan == 'Git' && $PelatihanSiswaSTCAMP404 == 'Git') {
            $this->dbs->create([
                'nis' => $reqData->nis,
                'nama_siswa' => $reqData->nama_siswa,
                'pelatihan' => $reqData->pelatihan
            ]);
            $msg = 'Anda berhasil menambahkan data pelatihan!!';
            return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
        } else if ($reqData->pelatihan == 'Laravel 8' && $PelatihanSiswaSTCAMP404 == 'Laravel 8') {
            $this->dbs->create([
                'nis' => $reqData->nis,
                'nama_siswa' => $reqData->nama_siswa,
                'pelatihan' => $reqData->pelatihan
            ]);
            $msg = 'Anda berhasil menambahkan data pelatihan!!';
            return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
        } else if ($reqData->pelatihan == 'Codeigniter 4' && $PelatihanSiswaSTCAMP404 == 'Codeigniter 4') {
            $this->dbs->create([
                'nis' => $reqData->nis,
                'nama_siswa' => $reqData->nama_siswa,
                'pelatihan' => $reqData->pelatihan
            ]);
            $msg = 'Anda berhasil menambahkan data pelatihan!!';
            return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
        } else {
            return redirect()->route('data-siswa');
        }
    }
}
