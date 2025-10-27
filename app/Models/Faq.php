<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question',
        'answer',
    ];

    /**
     * Scope a query to only include product quality FAQs.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeProductQuality($query)
    {
        return $query->where('type', 'product-quality');
    }

    /**
     * Scope a query to only include order delivery FAQs.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOrderDelivery($query)
    {
        return $query->where('type', 'order-delivery');
    }

    /**
     * Scope a query to only include partnership business FAQs.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePartnershipBusiness($query)
    {
        return $query->where('type', 'partnership-business');
    }
}
