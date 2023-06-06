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
        Schema::create('mahasiswamalindas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nim');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Hindu', 'Budha']);
            $table->string('nik');
            $table->string('telepon');
            $table->text('alamat');

            $table->unsignedBigInteger('namaprodi');
            $table->foreign('namaprodi')->references('id')->on('prodimalindas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswamalindas');
    }
};
