<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'shop_name',
        'shop_logo',
        'description',
        'rating',
        'shop_url',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'rating' => 'double',
    ];

    /**
     * Get the URL for the shop logo.
     *
     * @return string
     */
    public function getLogoUrlAttribute()
    {
        return asset('storage/' . $this->shop_logo);
    }
}
