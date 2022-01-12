<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    
    /**
     * Get the province that owns the city.
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * Get the jobs for the city.
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
