<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate extends Model
{
    //
    protected $fillable=['title',
        'color',
        'type',
        'category',
        'price',
        'province',
        'location',
        'phone',
        'email',
        'description',
        'visitor',
        'status',
        'photo_id',
        'user'
    ];

    public function user(){
        return $this->belongsTo('App\User','user');
    }
    public function RealCategory(){
        return $this->belongsTo('App\RealCategory','category');
    }
    public function Status(){
        return $this->belongsTo('App\Status','status');
    }
    public function Province(){
        return $this->belongsTo('App\Province','province');
    }
    public function RealType(){
        return $this->belongsTo('App\RealType','type');
    }
    public function photo(){

        return $this->belongsTo('App\Photo');
    }
}
