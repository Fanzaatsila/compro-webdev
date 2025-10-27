<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Carrier extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'job_title',
        'division',
        'city',
        'description',
        'benefits',
        'qualification',
        'range_salary',
        'type',
    ];

    /**
     * Boot the model.
     */
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($carrier) {
    //         if (!$carrier->slug) {
    //             $carrier->slug = Str::slug($carrier->job_title) . '-' . Str::random(5);
    //         }
    //     });
    // }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    /**
     * Scope a query to only include full-time jobs.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFullTime($query)
    {
        return $query->where('type', 'full-time');
    }

    /**
     * Scope a query to only include part-time jobs.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePartTime($query)
    {
        return $query->where('type', 'part-time');
    }

    /**
     * Scope a query to only include internship jobs.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInternship($query)
    {
        return $query->where('type', 'internship');
    }

    /**
     * Scope a query to only include freelance jobs.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFreelance($query)
    {
        return $query->where('type', 'freelance');
    }
}
