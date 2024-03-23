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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id("id_pemesanan");
            $table->unsignedBigInteger("id_pembayaran");
            $table->unsignedBigInteger("id_rute");
            $table->String("nama_pemesan");
            $table->string("status_pemesanan");
            $table->string("status_pembayaran");
            $table->date("tgl_pemesanan");
            $table->string("bukti_pembayaran");
            $table->string("no_kursi");
            $table->foreign('id_rute')->references('id_rute')->on('rutes')->onDelete('cascade');
            $table->foreign('id_pembayaran')->references('id_pembayaran')->on('pembayarans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
