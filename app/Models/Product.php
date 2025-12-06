<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\BelongsToTenantsTrait;

class Product extends Model
{
    use HasFactory, BelongsToTenantsTrait;


    protected $fillable = [
        'name',
    ];
}
