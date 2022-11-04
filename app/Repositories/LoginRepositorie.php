<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;

class LoginRepositorie
{
    public function pengecekan($request, $valid)
    {
        if (Auth::attempt($valid)) {
            $request->session()->regenerate();
            $pindah = redirect()->intended(route('home'))->with('pesan','Selamat datang');
        } else {
            $pindah = back()->with('error', 'Maaf ada kesalahan');
        }
        return $pindah;
    }
}
