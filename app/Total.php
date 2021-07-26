<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    protected $fillable = [
        'remains'
    ];

    public function post()
    {
        return $this->hasOne('App\Post');
    }
}
