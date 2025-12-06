<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\BelongsToTenantTrait;

class Product extends Model
{
    use HasFactory, BelongsToTenantTrait;

    protected $fillable = [
        'name',
        'description',
        'price',
        'sku',
    ];
}
