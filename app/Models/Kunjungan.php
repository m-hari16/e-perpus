<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kunjungan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kunjungan';

    protected $fillable = [
        'anggota_id'
    ];

    public function belongsToAnggota(): BelongsTo
    {
        return $this->belongsTo('profil_anggota', 'anggota_id');
    }
}
