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
        Schema::create('rawatjalans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('noregistrasi');
            $table->bigInteger('norm');
            $table->bigInteger('norujukan');
            $table->string('namapasien');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rawatjalans');
    }
};
