<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    /**
     * Get the cities for the provice.
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    /**
     * Get the jobs for the province.
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
