<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Suplier extends Model
{
    protected $fillable = [
        'name',
        'email',
        'shop_name',
        'phone_number',
        'address',
        'image',
    ];

    public function imageDelete()
    {
        File::delete(public_path('storage/' . $this->image));
    }
}
