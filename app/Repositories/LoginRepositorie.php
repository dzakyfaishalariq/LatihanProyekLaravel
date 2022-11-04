<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;

class LoginRepositorie
{
    public function pengecekan($request, $valid)
    {
        if (Auth::attempt($valid)) {
            notify()->success('Selamat datang ' . Auth::user()->name);
            $request->session()->regenerate();
            $pindah = redirect()->intended(route('home'));
        } else {
            notify()->error('maaf data anda ada yang salah');
            $pindah = back();
        }
        return $pindah;
    }
}
