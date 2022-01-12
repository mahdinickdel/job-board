<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Category extends Model
{
    use HasFactory, Mediable;

    /**
     * Get the jobs for the category.
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
