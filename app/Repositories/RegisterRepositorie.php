<?php

namespace App\Repositories;

use App\Models\User;

class RegisterRepositorie
{
    public function tambahData($request, $valid)
    {
        // if ($data_valid->fails()) {
        //     # code...
        //     notify()->error($data_valid->errors()->first());
        //     $data = redirect(route('register'));
        // }
        // membuat avatar otomatis apabila belum di inputkan gambar
        $nama = $request->nama;
        $warna = ['4420c7', 'f20808', '0dff00', 'dd00ff', '000000'];
        $w_rand = array_rand($warna, 1);
        $dua_carakter_nama = strtoupper($nama[0] . $nama[1]);
        $pictur = 'https://dummyimage.com/200x200/' . $warna[$w_rand] . '/ffffff.png&text=' . $dua_carakter_nama;
        //https://dummyimage.com/200x200/000000/ffffff.png&text=DZAKY
        $data_input = User::create([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'avatar' => $pictur,
            'password' => bcrypt($request->password)
        ]);
        $data_replay = $data_input->fresh();
        if ($data_replay != Null) {
            // buat pesan notify dengan memberikan data nama, username, dan email
            notify()->success('Selamat ' . $data_replay->name . ' anda berhasil mendaftar dengan username ' . $data_replay->username . ' dan email ' . $data_replay->email);
            // notify()->success('Data anda sudah di simpan dengan identitas \n'
            //     . 'Nama     : ' . $data_replay->name . '\n'
            //     . 'Username : ' . $data_replay->username . '\n'
            //     . 'Email     : ' . $data_replay->email . '\n');
            $data = redirect(route('login'));
        } else {
            # code...
            notify()->error('Data anda belum di simpan');
            $data = redirect(route('register'));
        }
        return $data;
    }
}
