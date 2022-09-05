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

    public function register()
    {
        return view('general.registrasi');
    }

    public function dashboardaccount()
    {
        return view('general.dashboard');
    }

    public function login()
    {
        // return redirect()->route('home');
    }
}
