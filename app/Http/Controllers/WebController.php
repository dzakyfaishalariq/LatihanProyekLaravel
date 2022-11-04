<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function login()
    {
        $title = "Login";
        return view('login', ['title' => $title]);
    }
    public function home()
    {
        return view('home');
    }
}
