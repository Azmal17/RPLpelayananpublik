<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inaps', function (Blueprint $table) {
            $table->id();
            $table->string('no_registrasi');
            $table->string('no_rm');
            $table->string('nama_pasien');
            $table->string('kode_dokter');
            $table->string('nama_dokter');
            $table->string('no_kamar');
            $table->string('no_rujukan');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inaps');
    }
};
