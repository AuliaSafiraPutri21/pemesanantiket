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
        Schema::create('customers', function (Blueprint $table) {
            $table->id("id_customers");
            $table->unsignedBigInteger("id_pemesanan");
            $table->string("nama");
            $table->string("alamat");
            $table->integer("No_Hp");
            $table->string("username");
            $table->string("password");
            $table->string("no_ktp");
            $table->date("tgl_pemesanan");
            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
