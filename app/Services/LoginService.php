<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Repositories\LoginRepositorie;
use Illuminate\Support\Facades\Validator;

class LoginService
{
    protected $loginRepo;
    public function __construct(LoginRepositorie $loginRepo)
    {
        $this->loginRepo = $loginRepo;
    }
    public function autentifik($request)
    {
        $valid = $request->validate([
            'username' => 'required|min:3|regex:/^[a-zA-Z 0-9]+$/',
            'password' => 'required|regex:/^[a-zA-Z0-9]+$/'
        ]);
        $data = $this->loginRepo->pengecekan($request, $valid);
        return $data;
    }
    public function logout($request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $data = redirect(route('login'))->with('pesan', 'Anda sudah logout harap login kembali');
        return $data;
    }
}
