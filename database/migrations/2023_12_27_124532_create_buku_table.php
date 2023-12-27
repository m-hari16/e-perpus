<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku');
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('isbn');
            $table->boolean('isAvailable')->default(true);
            $table->foreignId('kategori_id')->constrained('kategori_buku');
            $table->foreignId('perpustakaan_id')->constrained('profil_perpustakaan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
