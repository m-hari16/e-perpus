<?php

namespace App\Http\Services;

use App\Models\Buku;
use App\Models\ProfilAnggota;
use App\Models\SirkulasiBuku;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PeminjamanService
{
    public function list($search = null)
    {
        $pinjam = SirkulasiBuku::where('isReturn', false)->whereDate('created_at', Carbon::today());

        if($search) {
            $pinjam = $pinjam->where('kode_sirkulasi_buku', $search);
        }

        $pinjam = $pinjam->with(['hasBuku', 'hasAnggota'])->orderBy('created_at', 'desc')->get();
        
        return $pinjam;
    }

    public function save($datapinjam)
    {
        $buku = Buku::where('kode_buku', $datapinjam['kode_buku'])->first();
        $anggota = ProfilAnggota::where('nomor_anggota', $datapinjam['nomor_anggota'])->first();

        $pinjam = new SirkulasiBuku();
        $pinjam->buku_id = $buku->id;
        $pinjam->anggota_id = $anggota->id;
        $pinjam->plan_pengembalian = $datapinjam['plan_pengembalian'];
        $pinjam->isReturn = false;
        $pinjam->kode_sirkulasi = Str::random(9);
        $pinjam->save();

        Buku::where('id', $pinjam->buku_id)->update(['isAvailable' => false]);

        return $pinjam;
    }

    public function show($id)
    {
        $pinjam = SirkulasiBuku::findOrFail($id);
        return $pinjam;
    }

    public function delete($id)
    {
        $pinjam = SirkulasiBuku::findOrFail($id);

        $pinjam->delete();

        return $pinjam;
    }
}