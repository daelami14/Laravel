<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class variasi extends Model
{
    protected $fillable =[
        'id_variasi',
        'nama',
        'sku',
        'harga_jual'
    ];//
}
