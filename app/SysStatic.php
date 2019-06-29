<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SysStatic extends Model
{
    //
    protected $fillable=[
        'static_name',
        'page',
        'value_en',
        'value_kh',
        'photo_id'
    ];
    public function photo(){
        return $this->belongsTo('App\Photo','photo_id');
    }
}
