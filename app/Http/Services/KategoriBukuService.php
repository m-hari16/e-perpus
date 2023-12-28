<?php

namespace App\Http\Services;

use App\Models\KategoriBuku;

class KategoriBukuService 
{
    public function list()
    {
        return KategoriBuku::orderBy('created_at', 'desc')->get();
    }

    public function save($datakategori_buku)
    {
        $kategori_buku = KategoriBuku::create($datakategori_buku);

        return $kategori_buku;
    }

    public function show($id)
    {
        $kategori_buku = KategoriBuku::findOrFail($id);
        return $kategori_buku;
    }

    public function update($id, $newData)
    {
        $kategori_buku = KategoriBuku::findOrFail($id);

        $kategori_buku->nama_kategori = $newData;
        $kategori_buku->save();

        return $kategori_buku;
    }

    public function delete($id)
    {
        $kategori_buku = KategoriBuku::findOrFail($id);

        $kategori_buku->delete();

        return $kategori_buku;
    }
}