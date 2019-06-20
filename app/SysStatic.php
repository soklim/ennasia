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
        'file_id'
    ];
}
