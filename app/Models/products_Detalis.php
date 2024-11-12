<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products_Detalis extends Model
{
    protected $fillable = [
        'id_products',
        'price',
        'qty',
        'image',
        'flavor',
        'point',
    ];
}
