<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SirkulasiBuku extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sirkulasi_buku';

    protected $fillable = [
        'buku_id',
        'anggota_id',
        'plan_pengembalian',
        'actual_pengembalian',
        'isReturn',
        'kode_sirkulasi_buku',
    ];

    public function hasBuku(): BelongsTo
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }

    public function hasAnggota(): BelongsTo
    {
        return $this->belongsTo(ProfilAnggota::class, 'anggota_id');
    }
}
