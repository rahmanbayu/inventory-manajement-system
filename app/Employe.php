<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Employe extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'nik',
        'birth_date',
        'salary',
        'address',
        'image',
    ];

    public function deleteImage()
    {
        File::delete(public_path('storage/' . $this->image));
    }
}
