<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'code',
        'category_id',
        'suplier_id',
        'but_price',
        'sel_price',
        'quantity',
    ];
}
