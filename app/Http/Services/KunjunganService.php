<?php

namespace App\Http\Services;

use App\Models\Kunjungan;

class KunjunganService
{
    public function list()
    {
        return Kunjungan::with('belongsToAnggota')->orderBy('created_at', 'desc')->get();
    }

    public function save($kunjungan)
    {
        $anggota = Kunjungan::create($kunjungan);

        return $anggota;
    }
}