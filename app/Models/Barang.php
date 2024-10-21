<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Barang extends Model
{
    protected $table = 'master_barangs';
    protected $primaryKey = 'kode_barang';
    protected $fillable = ['kode_barang', 'kode_kategori',  'nama_barang', 'keterangan_detail', 'satuan', 'diskon'];

    public function kategori(): HasOne
    {
        return $this->hasOne(Kategori::class, 'kode_kategori', 'kode_kategori');
    }
    public function gambar(): HasOne
    {
        return $this->hasOne(Gambar::class, 'kode_barang');
    }
    public function nilai(): HasOne
    {
        return $this->hasOne(Rating::class, 'kode_barang');
    }
}
