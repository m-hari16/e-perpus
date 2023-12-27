<?php

namespace App\Http\Services;

use App\Models\ProfilPerpustakaan;

class PerpustakaanService
{
    public function list()
    {
        return ProfilPerpustakaan::orderBy('created_at', 'desc')->get();
    }

    public function save($dataperpus)
    {
        $perpus = new ProfilPerpustakaan();

        $perpus->nama = $dataperpus->nama;
        $perpus->alamat = $dataperpus->alamat;
        $perpus->others_identity = json_encode($dataperpus->others_identity);
        $perpus->save();

        return $perpus;
    }

    public function show($id)
    {
        $perpus = ProfilPerpustakaan::findOrFail($id);
        return $perpus;
    }

    public function update($id, $newData)
    {
        $perpus = ProfilPerpustakaan::findOrFail($id);

        $perpus->nama = $newData->nama;
        $perpus->alamat = $newData->alamat;
        $perpus->others_identity = json_encode($newData->others_identity);
        $perpus->save();

        return $perpus;
    }

    public function delete($id)
    {
        $perpus = ProfilPerpustakaan::findOrFail($id);

        $perpus->delete();

        return $perpus;
    }
}