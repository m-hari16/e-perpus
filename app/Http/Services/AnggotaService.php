<?php

namespace App\Http\Services;

use App\Models\ProfilAnggota;
use Illuminate\Support\Str;

class AnggotaService
{
    public function list()
    {
        return ProfilAnggota::orderBy('created_at', 'desc')->get();
    }

    public function save($dataAnggota)
    {
        $anggota = new ProfilAnggota;
        $anggota->nomor_anggota = Str::random(7);
        $anggota->nama = $dataAnggota["nama"];
        $anggota->tanggal_lahir = $dataAnggota["tanggal_lahir"];
        $anggota->jenis_kelamin = $dataAnggota["jenis_kelamin"];
        $anggota->alamat = $dataAnggota["alamat"];
        $anggota->profesi = $dataAnggota["profesi"];
        $anggota->save();
        
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

        $anggota->nama = $newData['nama'];
        $anggota->tanggal_lahir = $newData['tanggal_lahir'];
        $anggota->jenis_kelamin = $newData['jenis_kelamin'];
        $anggota->alamat = $newData['alamat'];
        $anggota->profesi = $newData['profesi'];
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
