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
        Schema::create('master_gambars', function (Blueprint $table) {
            $table->unsignedBigInteger('kode_gambar')->primary()->autoIncrement();
            $table->string('kode_barang')->nullable();
            $table->string('varian');
            $table->string('url_gambar', 512)->unique();
            $table->integer('harga');
            $table->integer('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_gambars');
    }
};
