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
        Schema::create('rutes', function (Blueprint $table) {
            $table->id("id_rute");
            $table->unsignedBigInteger("Id_Jadwal");
            $table->String("tipe_bus");
            $table->integer("biaya");
            $table->String("kota_tujuan");
            $table->foreign('Id_Jadwal')->references('Id_Jadwal')->on('jadwals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutes');
    }
};
