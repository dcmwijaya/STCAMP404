<?php

namespace App\Http\Controllers;

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

    public function regist()
    {
        return view('general.registrasi');
    }

    public function dashboardaccount()
    {
        return view('general.dashboard');
    }
}
