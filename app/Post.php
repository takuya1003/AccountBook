<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'date', 'item', 'income', 'expense','remains'
    ];

   
}
