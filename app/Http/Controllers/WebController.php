<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function login()
    {
        $title = "Login";
        // notify()->success("Selamat datang di Laman saya");
        // smilify('Su', 'Selamat Datang di laman saya');
        return view('login', ['title' => $title]);
    }
    public function home()
    {
        return view('home');
    }
}
