<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfilAnggota extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'profil_anggota';

    protected $fillable = [
        'nomor_anggota',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'profesi',
    ];

    public function hasManySirkulasi(): HasMany
    {
        return $this->hasMany(ProfilAnggota::class, 'anggota_id');
    }

}
