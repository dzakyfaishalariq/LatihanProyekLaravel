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
        $ruls = [
            'username' => 'required|min:3',
            'password' => 'required'
        ];
        $text = [
            'username.required' => 'data anda harus di isi',
            'username.min' => 'data kurang dari 3 karakter',
            'password.required' => 'data anda harus di isi'
        ];
        $data[] = Validator::make($request->all(), $ruls, $text);
        $valid = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $data[] = $this->loginRepo->pengecekan($request, $valid);
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
