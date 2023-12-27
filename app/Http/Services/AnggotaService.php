<?php

namespace App\Http\Services;

use App\Models\ProfilAnggota;

class AnggotaService
{
    public function list()
    {
        return ProfilAnggota::orderBy('created_at', 'desc')->get();
    }

    public function save($dataAnggota)
    {
        $anggota = ProfilAnggota::create($dataAnggota);

        return $anggota;
    }

    public function show($id)
    {
        $anggota = ProfilAnggota::findOrFail($id);
        return $anggota;
    }

    public function update($id, $newData)
    {
        $anggota = ProfilAnggota::findOrFail($id);

        $anggota->nama = $newData->nama;
        $anggota->tanggal_lahir = $newData->tanggal_lahir;
        $anggota->jenis_kelamin = $newData->jenis_kelamin;
        $anggota->alamat = $newData->alamat;
        $anggota->profesi = $newData->profesi;
        $anggota->save();

        return $anggota;
    }

    public function delete($id)
    {
        $anggota = ProfilAnggota::findOrFail($id);

        $anggota->delete();

        return $anggota;
    }
}
