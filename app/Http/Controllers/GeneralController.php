<?php

namespace App\Http\Controllers;
use App\Models\DBU;
use App\Http\Requests\REQSTCAMP;
use Illuminate\Support\Facades\Auth;

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

    public function logress(REQSTCAMP $reqData){
        if(Auth::attempt($reqData->only('email','password'))){
            $msg = ' Haii !! Selamat datang di menu dashboard STCAMP404';
            return redirect()->route('dashboard')->with('LoginNotif', $msg);
        }else{
            return redirect()->route('home');
        }   
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function regUser(REQSTCAMP $reqData)
    {   
        $validated = $reqData->validated();
        if($validated){
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

    public function forgetUser()
    {
        return view('general.forget');
    }

    public function resetUser(REQSTCAMP $reqData)
    {
        $validated = $reqData->validated();
        if ($validated) {
            // DBU::update([
            //     'siswa_id' => $reqData->siswa_id,
            //     'name' => $reqData->name,
            //     'email' => $reqData->email,
            //     'password' => bcrypt($reqData->cpassword)
            // ]);

            $msg = ' Selamat anda berhasil mereset password!!';
            return redirect()->route('forgetUser')->with('forgetNotif', $msg);
        }
    }
}
