<?php

namespace App\Http\Controllers;

use App\Models\DBS as DBS;
use App\Models\DBU as DBU;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct(DBS $db, DBU $dbu)
    {
        $this->db = $db;
        $this->dbu = $dbu;
    }

    public function index(Request $reqdata)
    {
        if (Session::has('adminAccess')) {
            Session::pull('siswaAccess');
            $nis = '202201';
            if($reqdata->has('search')){
                $search = $this->db->where('nis','LIKE','%'.$reqdata->search.'%')->orWhere('nama_siswa', 'LIKE', '%'.$reqdata->search.'%')->orWhere('pelatihan', 'LIKE', '%'.$reqdata->search.'%')->orWhere('created_at', 'LIKE', '%' . $reqdata->search . '%');
                $searchData = $search->paginate(5);
                $data = [
                    'nis' => $nis,
                    'data' => $searchData
                ];
            } else{
                $readDB = $this->db->paginate(5);
                $data = [
                    'nis' => $nis,
                    'data' => $readDB
                ];
            }
            return view('admin.datapelatihan', $data);
        }
    }

    public function create(Request $reqdata)
    {
        $getdata = $reqdata->all();
        $this->db->create($getdata);
        $msg = ' Selamat anda berhasil menambahkan data siswa!!';
        return redirect()->route('data-pelatihan')->with('addAdminNotif', $msg);
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
