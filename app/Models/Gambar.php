<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Gambar extends Model
{
    protected $table = 'master_gambars';
    protected $primaryKey = 'kode_gambar';
    protected $fillable = ['kode_barang','varian','harga','stok','url_gambar'];

    public function barang(): HasOne
    {
        return $this->hasOne(Barang::class);
    }
}
