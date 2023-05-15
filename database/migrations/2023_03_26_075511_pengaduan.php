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
        Schema::create('pengaduan', function (Blueprint $table){
            $table->id();
            $table->string('no_pengaduan', 25);
            $table->string('nama_pengadu', 20);
            $table->enum('bagian_layanan', ['sdm', 'inventori', 'farmasi', 'pelayanan_publik']);
            $table->char('email');
            $table->string('no_hp', 20);
            $table->date('tanggal_kunjungan');
            $table->string('isi_pengaduan');
            $table->enum('status', ['diterima', 'diproses']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
