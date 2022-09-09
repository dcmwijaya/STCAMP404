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
            $BT5 = $this->dbs->select('nis', 'nama_siswa', 'pelatihan', 'created_at')->where('nis', '=', $LogUser->siswa_id)->where('pelatihan', '=', 'Bootstrap 5')->distinct()->get();
            $GT = $this->dbs->select('nis', 'nama_siswa', 'pelatihan', 'created_at')->where('nis', '=', $LogUser->siswa_id)->where('pelatihan', '=', 'Git')->distinct()->get();
            $LR8 = $this->dbs->select('nis', 'nama_siswa', 'pelatihan', 'created_at')->where('nis', '=', $LogUser->siswa_id)->where('pelatihan', '=', 'Laravel 8')->distinct()->get();
            $CI4 = $this->dbs->select('nis', 'nama_siswa', 'pelatihan', 'created_at')->where('nis', '=', $LogUser->siswa_id)->where('pelatihan', '=', 'Codeigniter 4')->distinct()->get();
        }

        if ($BT5 != null) {
            return redirect()->route('data-siswa');
        } 
        else if ($GT != null) {
            return redirect()->route('data-siswa');
        }
        else if ($LR8 != null) {
            return redirect()->route('data-siswa');
        } 
        else if ($CI4 != null) {
            return redirect()->route('data-siswa');
        }
        else if ($BT5 == null){
            $this->dbs->create([
                'nis' => $reqData->nis,
                'nama_siswa' => $reqData->nama_siswa,
                'pelatihan' => $reqData->pelatihan
            ]);
            $msg = 'Anda berhasil menambahkan data pelatihan!!';
            return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
        } 
        else if ($GT == null) {
            $this->dbs->create([
                'nis' => $reqData->nis,
                'nama_siswa' => $reqData->nama_siswa,
                'pelatihan' => $reqData->pelatihan
            ]);
            $msg = 'Anda berhasil menambahkan data pelatihan!!';
            return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
        } 
        else if ($LR8 == null) {
            $this->dbs->create([
                'nis' => $reqData->nis,
                'nama_siswa' => $reqData->nama_siswa,
                'pelatihan' => $reqData->pelatihan
            ]);
            $msg = 'Anda berhasil menambahkan data pelatihan!!';
            return redirect()->route('data-siswa')->with('addSiswaNotif', $msg);
        } 
        else if ($CI4 == null) {
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
