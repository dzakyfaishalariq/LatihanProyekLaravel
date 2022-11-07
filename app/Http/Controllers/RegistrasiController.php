<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\RegisterService;
use Illuminate\Support\Facades\Validator;

class RegistrasiController extends Controller
{
    //
    protected $registerService;
    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }
    public function input_register(Request $request)
    {
        $data = $this->registerService->cekInputan($request);
        // if ($data[0]->fails()) {
        //     # code...
        //     notify()->error($data[0]->errors()->first());
        //     return redirect(route('register'));
        // } else {
        //     return $data[1];
        // }
        return $data;
        //melakukan manual tanpa servis dan repositories
        // $ruls = [
        //     'nama' => 'required|min:3',
        //     'username' => 'required|min:3',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required'
        // ];
        // $pesan = [
        //     'nama.required' => 'Data nama harus di isi',
        //     'username.required' => 'Data username harus di isi',
        //     'email.required' => 'Data email harus di isi',
        //     'password.required' => 'Data password harus di isi',
        //     'nama.min' => 'data kurang dari 3 carakter',
        //     'username.min' => 'data kurang dari 3 carakter',
        //     'email.unique' => 'data sudah ada di dalam database',
        // ];
        // $validatif = Validator::make($request->all(), $ruls, $pesan);
        // if ($validatif->fails()) {
        //     notify()->error($validatif->errors()->first());
        //     return redirect(route('register'));
        // }
        // $data_input = User::create([
        //     'name' => $request->nama,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => $request->password
        // ]);
        // $data_replay = $data_input->fresh();
        // if ($data_replay != Null) {
        //     notify()->success('Data anda sudah di simpan dengan nama ' . $data_replay->name);
        //     return redirect(route('login'));
        // } else {
        //     # code...
        //     notify()->error('Data anda belum di simpan dengan nama ' . $data_replay->name);
        //     return redirect(route('register'));
        // }
    }
}
