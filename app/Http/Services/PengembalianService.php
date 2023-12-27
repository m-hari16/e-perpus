<?php

namespace App\Http\Services;

use App\Models\Buku;
use App\Models\SirkulasiBuku;
use Carbon\Carbon;

class PengembalianService
{
    public function list($search = null)
    {
        $pengembalian = new SirkulasiBuku();

        if($search) {
            $pengembalian = $pengembalian->where('kode_sirkulasi_buku', $search);
        }

        $pengembalian = $pengembalian->with(['hasBuku', 'hasAnggota'])->orderBy('created_at', 'desc')->get();
        
        return $pengembalian;
    }

    public function save($kodeSirkulasi)
    {
        $pengembalian = SirkulasiBuku::findOrFail($kodeSirkulasi);
        $pengembalian->isReturn = true;
        $pengembalian->actual_pengembalian = Carbon::now()->format('Y-m-d');
        $pengembalian->save();

        Buku::where('id', $pengembalian->buku_id)->update(['isAvailable' => true]);

        return $pengembalian;
    }

    public function show($id)
    {
        $pengembalian = SirkulasiBuku::findOrFail($id);
        return $pengembalian;
    }

    public function delete($id)
    {
        $pengembalian = SirkulasiBuku::findOrFail($id);

        $pengembalian->delete();

        return $pengembalian;
    }
}