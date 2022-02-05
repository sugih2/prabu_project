<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function profile()
    {
        return view('profile');
    }

    public function penjualan()
    {
        return view('penjualan');
    }
}
