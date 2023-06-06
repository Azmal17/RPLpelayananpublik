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
        Schema::create('nilaimalindas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('namamhs');
            $table->foreign('namamhs')->references('id')->on('mahasiswamalindas')->onDelete('cascade');
            $table->unsignedBigInteger('kategori');
            $table->foreign('kategori')->references('id')->on('matakuliahmalindas')->onDelete('cascade');
            $table->integer('skor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilaimalindas');
    }
};
