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

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
    public function photo(){

        return $this->belongsTo('App\Photo');
    }
}
