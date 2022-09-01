<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function datasiswa()
    {
        return view('menu/datasiswa');
    }

    public function infokegiatan()
    {
        return view('menu/infokegiatan');
    }

    public function regist()
    {
        return view('menu/registrasi');
    }

    public function dashboardaccount()
    {
        return view('menu/dashboard');
    }
}
