<?php

namespace App\Http\Controllers;
use App\Models\DBU as DB;
use App\Http\Requests\REQSTCAMP;
use Illuminate\Support\Facades\Auth;


class GeneralController extends Controller
{
    public function __construct(DB $db)
    {
        $this->db = $db;
    }

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
        $count = $this->db->count();
        $IDS = array(
            'defid' => '20220100',
            'jumlah' => $count
        );
        return view('general.registrasi', $IDS);
    }

    public function dashboardaccount()
    {
        return view('general.dashboard');
    }

    public function logress(REQSTCAMP $reqData){   
        $cemail = $reqData->email;
        $cpass = $reqData->password;
        $session = $this->db->where('email', $cemail)->where('password', $cpass)->get();

        if(count($session)>0){
            $reqData->session->put('uid', $session[0]->id);
            $reqData->session->put('usid', $session[0]->siswa_id);
            $reqData->session->put('uname', $session[0]->name);
            $reqData->session->put('uemail', $session[0]->email);
            $msg = ' Selamat anda berhasil masuk di menu dashboard STCAMP404';
            return redirect()->route('dashboardaccount')->with('LoginNotif', $msg);
        } else{
            return redirect()->route('home');
        }
    }

    public function login(REQSTCAMP $reqData){
        if($reqData->session()->get('uid')==""){
            return redirect()->route('home');
        } else {
            $username = $reqData->session()->get('uname');
            $siswaID = $reqData->session()->get('usid');
            $email = $reqData->session()->get('uemail');
            $capsule = [
                'username' => $username,
                'siswaID' => $siswaID,
                'email' => $email
            ];
            return redirect()->route('dashboardaccount')->with($capsule);
        }
    }

    public function logout(REQSTCAMP $reqData){
        $reqData->session()->forget('uid');
        $reqData->session()->forget('uname');
        $msg=" Anda telah berhasil keluar dari keseluruhan aktivitas menu utama STCAMP404!!";
        return redirect()->route('home')->with('LogoutNotif', $msg);
    }

    public function regUser(REQSTCAMP $reqData)
    {   
        $validated = $reqData->validated();
        if($validated){
            $this->db->create([
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
