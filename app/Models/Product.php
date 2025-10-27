<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_name',
        'description',
        'image',
        'category',
        'type',
        'is_featured',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'price' => 'double',
    ];

    /**
     * Get the URL for the product image.
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    /**
     * Scope a query to only include individual products.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeIndividual($query)
    {
        return $query->where('type', 'individual');
    }

    /**
     * Scope a query to only include hampers products.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeHampers($query)
    {
        return $query->where('type', 'hampers');
    }
}
