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
        // relasi barang ke kategori
        Schema::table('master_barangs', function (Blueprint $table) {
           $table->foreign('kode_kategori')->references('kode_kategori')->on('master_kategoris')->onUpdate('cascade')->onDelete('cascade');
        });
        // relasi gambar ke barang
        Schema::table('master_gambars', function (Blueprint $table) {
           $table->foreign('kode_barang')->references('kode_barang')->on('master_barangs')->onUpdate('cascade')->onDelete('cascade');
        });
        // relasi kategori ke gambar
        Schema::table('master_kategoris', function (Blueprint $table) {
           $table->foreign('url_gambar')->references('url_gambar')->on('master_gambars')->onUpdate('cascade')->onDelete('cascade');
        });
         // relasi rating ke barang
         Schema::table('master_ratings', function (Blueprint $table) {
            $table->foreign('kode_barang')->references('kode_barang')->on('master_barangs')->onUpdate('cascade')->onDelete('cascade');
         });
         // relasi rating ke barang dan user
         Schema::table('carts', function (Blueprint $table) {
            $table->foreign('kode_user')->references('kode_user')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kode_barang')->references('kode_barang')->on('master_barangs')->onUpdate('cascade')->onDelete('cascade');

         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
