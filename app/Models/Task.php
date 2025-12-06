<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'completed',
        'due_date',
        'duration',
    ];

    public function getDurationInHours(): float
    {
        return $this->duration / 60;
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'task_user', 'task_id', 'user_id');
    }
}
