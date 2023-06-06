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
        Schema::create('mhsggs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nim');
            $table->string('nama_mhs');
            $table->date('tgl_lahir');
            $table->enum('jk', ['pria', 'wanita']);
            $table->string('prodi');
            $table->enum('agama', ['islam', 'kristen', 'hindu', 'buddha']);
            $table->bigInteger('nik');
            $table->bigInteger('telp');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mhsggs');
    }
};
