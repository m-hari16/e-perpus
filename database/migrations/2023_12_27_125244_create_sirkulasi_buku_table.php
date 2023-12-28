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
        Schema::create('sirkulasi_buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_sirkulasi');
            $table->foreignId('buku_id')->constrained('buku');
            $table->foreignId('anggota_id')->constrained('profil_anggota');
            $table->date('plan_pengembalian');
            $table->date('actual_pengembalian')->nullable(true);
            $table->boolean('isReturn')->default(false);
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
        Schema::dropIfExists('sirkulasi_buku');
    }
};
