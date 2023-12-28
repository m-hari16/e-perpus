<?php

namespace App\Http\Services;

use App\Models\Kunjungan;
use App\Models\ProfilAnggota;
use Carbon\Carbon;

class KunjunganService
{
    public function list()
    {
        return Kunjungan::whereDate('created_at', Carbon::today())->with('belongsToAnggota')->orderBy('created_at', 'desc')->get();
    }

    public function save($kunjungan)
    {
        $anggota = ProfilAnggota::where('nomor_anggota', $kunjungan['nomor_anggota'])->first();
        
        $kunjungan = new Kunjungan;
        $kunjungan->anggota_id = $anggota->id;
        $kunjungan->save();

        return $kunjungan;
    }
}