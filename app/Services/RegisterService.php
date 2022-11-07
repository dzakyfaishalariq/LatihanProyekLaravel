<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;
use App\Repositories\RegisterRepositorie;

class RegisterService
{
    protected $registerRepositorie;
    public function __construct(RegisterRepositorie $registerRepositorie)
    {
        $this->registerRepositorie = $registerRepositorie;
    }
    public function cekInputan($request)
    {
        $ruls = [
            'nama' => 'required|min:3',
            'username' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ];
        $text = [
            'nama.required' => 'Data nama harus di isi',
            'username.required' => 'Data username harus di isi',
            'email.required' => 'Data email harus di isi',
            'password.required' => 'Data password harus di isi',
            'nama.min' => 'data kurang dari 3 carakter',
            'username.min' => 'data kurang dari 3 carakter',
            'email.unique' => 'data sudah ada di dalam database',
        ];
        // $valid = $request->validate([
        //     'nama' => 'required|min:3',
        //     'username' => 'required|min:3',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required'
        // ]);

        $data_valid = Validator::make($request->all(), $ruls, $text);
        // $data_valid = Validator::make($valid, $ruls, $text);
        if ($data_valid->fails()) {
            # code...
            notify()->error($data_valid->errors()->first());
            $data = redirect(route('register'));
        } else {
            # code...
            $data = $this->registerRepositorie->tambahData($request);
        }
        return $data;
    }
}
