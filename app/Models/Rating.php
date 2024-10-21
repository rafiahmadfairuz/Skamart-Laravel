<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'master_ratings';
    protected $primaryKey = 'kode_rating';
    protected $fillable = ['kode_barang','nilai'];
}
