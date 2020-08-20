<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'code',
        'category_id',
        'suplier_id',
        'buy_price',
        'sel_price',
        'buy_at',
        'quantity',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function imageDelete()
    {
        File::delete(public_path('storage/' . $this->image));
    }
}
