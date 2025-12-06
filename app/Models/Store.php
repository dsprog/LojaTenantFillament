<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'slug',
        'about',
        'phone',
    ];
}
