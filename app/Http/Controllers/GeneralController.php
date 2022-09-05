<?php

namespace App\Http\Controllers;
use App\Models\DBU;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function infokegiatan()
    {
        return view('general.infokegiatan');
    }

    public function register()
    {
        $count = DBU::all()->count();
        $IDS = array(
            'defid' => '20220100',
            'jumlah' => $count + 1
        );
        return view('general.registrasi', $IDS);
    }

    public function dashboardaccount()
    {
        return view('general.dashboard');
    }

    public function regUser(Request $reqData)
    {
        // Validator::make($reqData, [
        //     'name' => ['required', 'string', 'max:50'],
        //     'email' => ['required', 'string', 'email', 'max:25', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed', 'same:cpassword']
        // ]);
        
        DBU::create([
            'siswa_id' => $reqData->siswa_id,
            'name' => $reqData->name,
            'email' => $reqData->email,
            'password' => bcrypt($reqData->cpassword)
        ]);
        
        $msg = ' Selamat anda berhasil melakukan registrasi!!';
        return redirect()->route('registrasi')->with('registerNotif', $msg);
    }
}
