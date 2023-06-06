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
        Schema::create('matkulggs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_matkul');
            $table->string('nilai');

            $table->unsignedBigInteger('nim_mhs');//fk
            $table->foreign('nim_mhs')->references('id')->on('mhsggs')->onDelete('cascade');
            $table->unsignedBigInteger('nama');
            $table->foreign('nama')->references('id')->on('mhsggs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkulggs');
    }
};
