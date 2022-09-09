<?php

namespace App\Http\Controllers;
use App\Models\DBU as DBU;
use App\Models\DBS as DBS;
use App\Http\Requests\REQSTCAMP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class GeneralController extends Controller
{
    public function __construct(DBU $dbu, DBS $dbs)
    {
        $this->db = $dbu;
        $this->dbs = $dbs;
    }

    public function index()
    {
        return view('index');
    }

    public function home()
    {
        if (Session::has('LogSession')) {
            $LogUser = $this->db->where('id', '=', Session::get('LogSession'))->first();
            $Data = [
                'LogUser' => $LogUser
            ];
            return view('index', $Data);
        }
    }

    public function infokegiatan()
    {
        return view('general.infokegiatan');
    }

    public function register()
    {
        $Usercount = $this->db->count();
        if ($Usercount == null){
            $count = '1';
        } else {
            $count = $Usercount;
        }
        $IDS = array(
            'defid' => '20220100',
            'jumlah' => $count
        );
        return view('general.registrasi', $IDS);
    }

    public function login(Request $reqData){   
        $user = $this->db->where('email', '=', $reqData->email)->first();
        if($user){
            if(Hash::check($reqData->password, $user->password)){
                $reqData->session()->put('LogSession', $user->id);
                $reqData->session()->put('adminAccess', $user->id);
                $reqData->session()->put('siswaAccess', $user->id);
                $msg = " Anda berhasil masuk, selamat datang di menu utama STCAMP404!!";
                return redirect()->route('dashboardaccount')->with('LoginNotif', $msg);
            } else{
                return redirect()->route('registrasi');
            }
        } else{
            return redirect()->route('registrasi');
        }
    }

    public function dashboardaccount()
    {
        if (Session::has('LogSession')) {
            $LogUser = $this->db->where('id', '=', Session::get('LogSession'))->first();
            $IdPelUser = $this->dbs->where('id_pelatihan', '=', Session::get('LogSession'))->get();
            $PelUser = $this->dbs->select('pelatihan')->where('nis', '=', $LogUser->siswa_id)->distinct()->get();

            $CountBootstrap8 = $this->dbs->where('pelatihan', 'Bootstrap 5')->count();
            $CountGit = $this->dbs->where('pelatihan', 'Git')->count();
            $CountLaravel8 = $this->dbs->where('pelatihan', 'Laravel 8')->count();
            $CountCodeigniter4 = $this->dbs->where('pelatihan', 'Codeigniter 4')->count();

            $Data = [
                'Cbt' => $CountBootstrap8,
                'Cgt' => $CountGit,
                'Clr' => $CountLaravel8,
                'Cci' => $CountCodeigniter4,
                'LogUser' => $LogUser,
                'IdPelUser' => $IdPelUser,
                'PelUser' => $PelUser
            ];

            return view('general.dashboard', $Data);
        }
    }

    public function updprofile(Request $reqdata)
    {
        $UpData = $this->db->where('id', '=', Session::get('LogSession'))->first();
        $UpData->update([
            'siswa_id' => $reqdata->siswa_id,
            'name' => $reqdata->name,
            'password' => bcrypt($reqdata->password),
            'image' => $reqdata->file('image')->move('asset\img\profile', $reqdata->file('image')->getClientOriginalName())
        ]);
        $msg = ' Selamat anda berhasil mengubah data profil!!';
        return redirect()->route('dashboardaccount')->with('updateProfileNotif', $msg);
    }

    public function logout(){
        if (Session::has('LogSession')) {
            Session::pull('LogSession');
            $msg = " Anda telah berhasil keluar dari segala bentuk aktivitas!!";
            return redirect()->route('index')->with('LogoutNotif', $msg);   
        }
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
