<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
