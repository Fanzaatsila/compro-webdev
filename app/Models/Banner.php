<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'banner_key',
        'banner_file',
    ];

    /**
     * Get the URL for the banner image.
     *
     * @return string
     */
    public function getBannerUrlAttribute()
    {
        return asset('storage/' . $this->banner_file);
    }

    /**
     * Determine if the banner is a video.
     *
     * @return bool
     */
    public function getIsVideoAttribute()
    {
        $extension = pathinfo($this->banner_file, PATHINFO_EXTENSION);
        return in_array(strtolower($extension), ['mp4', 'webm', 'ogg', 'mov', 'avi', 'wmv']);
    }
}
