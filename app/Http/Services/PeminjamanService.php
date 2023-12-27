<?php

namespace App\Http\Services;

use App\Models\Buku;
use App\Models\SirkulasiBuku;
use Illuminate\Support\Str;

class PeminjamanService
{
    public function list($search = null)
    {
        $pinjam = new SirkulasiBuku();

        if($search) {
            $pinjam = $pinjam->where('kode_sirkulasi_buku', $search);
        }

        $pinjam = $pinjam->with(['hasBuku', 'hasAnggota'])->orderBy('created_at', 'desc')->get();
        
        return $pinjam;
    }

    public function save($datapinjam)
    {
        $pinjam = new SirkulasiBuku();

        $pinjam->buku_id = $datapinjam->buku_id;
        $pinjam->anggota_id = $datapinjam->anggota_id;
        $pinjam->plan_pengembalian = $datapinjam->plan_pengembalian;
        $pinjam->isReturn = false;
        $pinjam->kode_sirkulasi_buku = Str::random(9);
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