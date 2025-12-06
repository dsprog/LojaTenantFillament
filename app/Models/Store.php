<?php

namespace App\Models;

use App\Traits\BelongsToTenantTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use BelongsToTenantTrait, HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'slug',
        'about',
        'phone',
    ];
}
