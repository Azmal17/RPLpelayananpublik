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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm');
            $table->string('no_asuransi');
            $table->string('nama_pasien');
            $table->string('umur');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat_pasien');
            $table->string('gol_darah');
            $table->string('no_telp');
            $table->string('email');
            $table->string('agama');
            $table->string('status_kawin');
            $table->timestamps();
        });
    }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
