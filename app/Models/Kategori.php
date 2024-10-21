<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Barang;

class Kategori extends Model
{
    protected $table = 'master_kategoris';
    protected $primaryKey = 'kode_kategori';
    protected $fillable = ['nama_kategori', 'url_gambar'];

    public function barang(): HasOne
    {
        return $this->hasOne(Barang::class, 'kode_kategori', 'kode_kategori');
    }
}
