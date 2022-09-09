<?php

namespace App\Http\Controllers;

use App\Models\DBS as DBS;
use App\Models\DBU as DBU;
use App\Models\PEL as PEL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct(DBS $db, DBU $dbu, PEL $dbl)
    {
        $this->db = $db;
        $this->dbu = $dbu;
        $this->dbl = $dbl;
    }

    public function index(Request $reqdata)
    {
        if (Session::has('adminAccess')) {
            // Session::pull('LogSession');
            Session::pull('siswaAccess');
            $NIS = $this->db->distinct()->get(['nis']);
            $NAMA = $this->db->distinct()->get(['nama_siswa']);
            $PEL = $this->dbl->distinct()->get(['nama_pelatihan']);
            if($reqdata->has('search')){
                $search = $this->db->where('nis','LIKE','%'.$reqdata->search.'%')->orWhere('nama_siswa', 'LIKE', '%'.$reqdata->search.'%')->orWhere('pelatihan', 'LIKE', '%'.$reqdata->search.'%')->orWhere('created_at', 'LIKE', '%' . $reqdata->search . '%');
                $searchData = $search->paginate(5);
                $data = [
                    'data' => $searchData,
                    'NIS' => $NIS,
                    'NAMA' => $NAMA,
                    'PEL' => $PEL
                ];
            } else{
                $readDB = $this->db->paginate(5);
                $data = [
                    'data' => $readDB,
                    'NIS' => $NIS,
                    'NAMA' => $NAMA,
                    'PEL' => $PEL
                ];
            }
            return view('admin.datapelatihan', $data);
        }
    }

    public function create(Request $reqdata)
    {
        if (Session::has('adminAccess')) {
            $LogUser = $this->dbu->where('id', '=', Session::get('adminAccess'))->first();
            $DB_NULL = $this->db->select('pelatihan')->where('nis', '=', $LogUser->siswa_id)->where('pelatihan', '=', NULL)->distinct()->get();
            $DB_Search = $this->db->select('pelatihan')->where('nis', '=', $LogUser->siswa_id)->where('pelatihan', '=', $reqdata->pelatihan)->distinct()->get();
            if ($DB_Search == $DB_NULL) {
                $this->db->create([
                    'nis' => $LogUser->siswa_id,
                    'nama_siswa' => $LogUser->name,
                    'pelatihan' => $reqdata->pelatihan
                ]);
                $msg = ' Selamat anda berhasil menambahkan data siswa!!';
                return redirect()->route('data-pelatihan')->with('addAdminNotif', $msg);
            } else {
                $msg = 'Data pelatihan anda sudah ada, harap selesaikan terlebih dahulu!!';
                return redirect()->route('data-pelatihan')->with('errorAdminNotif', $msg);
            }
        }
    }

    public function update(Request $reqdata, $id)
    {
        $findID = $this->db->find($id);
        $findID->update($reqdata->all());
        $msg = ' Selamat anda berhasil mengubah data siswa!!';
        return redirect()->route('data-pelatihan')->with('updateAdminNotif', $msg);
    }

    public function delete($id)
    {
        $findID = $this->db->find($id);
        $findID->delete();
        $this->db->reset();
        $msg = ' Selamat anda berhasil menghapus data siswa!!';
        return redirect()->route('data-pelatihan')->with('deleteAdminNotif', $msg);
    }
}
