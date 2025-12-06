<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tenant extends Model
{
    protected $fillable = [
        'name',
        'code',
        'slug',
    ];

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
