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
            $BT5_NULL = $this->dbs->select('nis', 'nama_siswa', 'pelatihan', 'created_at')->where('nis', '=', $LogUser->siswa_id)->where('pelatihan', '=', NULL)->distinct()->get();
            $GT_NULL = $this->dbs->select('nis', 'nama_siswa', 'pelatihan', 'created_at')->where('nis', '=', $LogUser->siswa_id)->where('pelatihan', '=', NULL)->distinct()->get();
            $LR8_NULL = $this->dbs->select('nis', 'nama_siswa', 'pelatihan', 'created_at')->where('nis', '=', $LogUser->siswa_id)->where('pelatihan', '=', NULL)->distinct()->get();
            $CI4_NULL = $this->dbs->select('nis', 'nama_siswa', 'pelatihan', 'created_at')->where('nis', '=', $LogUser->siswa_id)->where('pelatihan', '=', NULL)->distinct()->get();
        }

        if ($reqData->pelatihan != $BT5_NULL) {
            return redirect()->route('data-siswa');
        } 
        else if ($reqData->pelatihan != $GT_NULL) {
            return redirect()->route('data-siswa');
        }
        else if ($reqData->pelatihan != $LR8_NULL) {
            return redirect()->route('data-siswa');
        } 
        else if ($reqData->pelatihan != $CI4_NULL) {
            return redirect()->route('data-siswa');
        }
        else if ($reqData->pelatihan == $BT5_NULL){
            $this->dbs->create([
                'nis' => $reqData->nis,
                'nama_siswa' => $reqData->nama_siswa,
                'pelatihan' => $reqData->pelatihan
            ]);
            $msg = 'Anda berhasil menambahkan data pelatihan!!';
            return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
        } 
        else if ($reqData->pelatihan == $GT_NULL) {
            $this->dbs->create([
                'nis' => $reqData->nis,
                'nama_siswa' => $reqData->nama_siswa,
                'pelatihan' => $reqData->pelatihan
            ]);
            $msg = 'Anda berhasil menambahkan data pelatihan!!';
            return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
        } 
        else if ($reqData->pelatihan == $LR8_NULL) {
            $this->dbs->create([
                'nis' => $reqData->nis,
                'nama_siswa' => $reqData->nama_siswa,
                'pelatihan' => $reqData->pelatihan
            ]);
            $msg = 'Anda berhasil menambahkan data pelatihan!!';
            return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
        } 
        else if ($reqData->pelatihan == $CI4_NULL) {
            $this->dbs->create([
                'nis' => $reqData->nis,
                'nama_siswa' => $reqData->nama_siswa,
                'pelatihan' => $reqData->pelatihan
            ]);
            $msg = 'Anda berhasil menambahkan data pelatihan!!';
            return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
        }
    }
}
