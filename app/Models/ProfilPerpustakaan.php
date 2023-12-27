<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfilPerpustakaan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'profil_perpustakaan';

    protected $fillable = [
        'nama',
        'alamat',
        'others_identity',
    ];
}
