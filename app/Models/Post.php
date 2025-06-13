<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','excerpt', 'body', 'image_path', 'is_published', 'min_to_read'
    ];

    // public function setIsPublishedAttribute($value)
    // {
    //     $this->attributes['is_published'] = ($value === 'on' || $value === '1' || $value === 1) ? 1 : 0;
    // }
}
