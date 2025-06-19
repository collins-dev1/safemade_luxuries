<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
     protected $fillable = [
        'blog_title',
        'blog_photo',
        'blog_description'
    ];
}
