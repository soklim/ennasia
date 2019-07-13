<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    //
    protected $uploads = '/images/';

    protected $fillable=['realeastate_id',
        'file'
    ];

    public function getFileAttribute($photo){

        return $this->uploads. $photo;

    }
}
