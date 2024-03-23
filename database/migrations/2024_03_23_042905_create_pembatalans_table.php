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
        Schema::create('pembatalans', function (Blueprint $table) {
            $table->id("id_pembatalan");
            $table->unsignedBigInteger("id_pemesanan");
            $table->string("nama_bank");
            $table->string("no_rekening");
            $table->enum("status_pembatalan",['Berhasil','Tidak Berhasil']);
            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembatalans');
    }
};
