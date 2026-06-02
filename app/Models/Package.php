<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'category', 'name', 'description', 'duration', 'price', 
        'features', 'image_url', 'is_active'
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
