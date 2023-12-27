<?php

namespace App\Http\Services;

use App\Models\ProfilPetugas;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PetugasService
{
    public function list()
    {
        return ProfilPetugas::orderBy('created_at', 'desc')->get();
    }

    public function save($datapetugas)
    {
        $user = new User();
        $user->name = $datapetugas->name;
        $user->email = $datapetugas->email;
        $user->password = Hash::make($datapetugas->password);
        $user->save();

        $petugas = new ProfilPetugas();
        $petugas->nama = $datapetugas->nama;
        $petugas->tanggal_lahir = $datapetugas->tanggal_lahir;
        $petugas->jenis_kelamin = $datapetugas->jenis_kelamin;
        $petugas->alamat = $datapetugas->alamat;
        $petugas->user_id = $user->id;

        return $petugas;
    }

    public function show($id)
    {
        $petugas = ProfilPetugas::findOrFail($id);
        return $petugas;
    }

    public function update($id, $newData)
    {
        $petugas = ProfilPetugas::findOrFail($id);

        $petugas->nama = $newData->nama;
        $petugas->tanggal_lahir = $newData->tanggal_lahir;
        $petugas->jenis_kelamin = $newData->jenis_kelamin;
        $petugas->alamat = $newData->alamat;
        $petugas->profesi = $newData->profesi;
        $petugas->save();

        return $petugas;
    }

    public function delete($id)
    {
        $petugas = ProfilPetugas::findOrFail($id);

        $petugas->delete();

        return $petugas;
    }
}