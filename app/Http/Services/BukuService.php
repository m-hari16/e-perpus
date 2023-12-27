<?php

namespace App\Http\Services;

use App\Models\Buku;
use Illuminate\Support\Str;

class BukuService
{
    public function list($search = null)
    {
        $buku = new Buku();

        if($search) {
            $buku = $buku->where('judul', 'ilike', '%'.$search.'%')
                        ->orWhere('pengarang', 'ilike', '%'.$search.'%')
                        ->orWhere('penerbit', 'ilike', '%'.$search.'%');
        }

        $buku = $buku->orderBy('created_at', 'desc')->get();

        return $buku;
    }

    public function save($databuku)
    {
        $buku = new Buku();

        $buku->kode_buku = Str::random(8);
        $buku->judul = $databuku->judul;
        $buku->pengarang = $databuku->pengarang;
        $buku->penerbit = $databuku->penerbit;
        $buku->isbn = $databuku->isbn;
        $buku->isAvailable = true;
        $buku->kategori_id = $databuku->kategori_id;
        $buku->perpustakaan_id = $databuku->perpustakaan_id;
        $databuku->save();

        return $buku;
    }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return $buku;
    }

    public function update($id, $databuku)
    {
        $buku = Buku::findOrFail($id);

        $buku->judul = $databuku->judul;
        $buku->pengarang = $databuku->pengarang;
        $buku->penerbit = $databuku->penerbit;
        $buku->isbn = $databuku->isbn;
        $buku->kategori_id = $databuku->kategori_id;
        $buku->perpustakaan_id = $databuku->perpustakaan_id;
        $databuku->save();

        return $buku;
    }

    public function delete($id)
    {
        $buku = Buku::findOrFail($id);

        $buku->delete();

        return $buku;
    }
}
