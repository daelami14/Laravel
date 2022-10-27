<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $fillable =[
        'id',
        'nama_produk',
        'sku',
        'brand',
        'deskripsi',
        'id_variasi'
    ];//
}
