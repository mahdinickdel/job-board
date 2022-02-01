<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the job.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The users that belong to the job.
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->using(JobUser::class);
    }

    /**
     * Get all of the job's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * Get the province for current job.
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * Get the city for current job.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Get the category for current job.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the jobs's type.
     *
     * @return string
     */
    public function getTheTypeAttribute()
    {
        $types = [
            'full-time' => 'تمام وقت',
            'part-time' => 'نیمه وقت',
            'remote' => 'ریموت',
        ];

        return $types[$this->type];
    }

    /**
     * Get the jobs's formatted salary.
     *
     * @return string
     */
    public function getTheSalaryAttribute()
    {
        return number_format($this->salary);
    }

    /**
     * Get the jobs's formatted creation date.
     *
     * @return string
     */
    public function getTheCreatedAtAttribute()
    {
        return verta($this->created_at)->format('j F Y ساعت H:i');
    }
}
