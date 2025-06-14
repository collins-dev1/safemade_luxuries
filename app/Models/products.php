<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'product_title',
        'product_description',
        'product_oldprice',
        'product_newprice',
        'product_photo'
    ];

    
}
