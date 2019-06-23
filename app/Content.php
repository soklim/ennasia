<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $fillable=['title',
        'color',
        'category_id',
        'user_id',
        'photo_id',
        'visitor',
        'content',
        'isActive'
    ];
}
