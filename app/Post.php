<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // protected $table = 'posts';
    protected $fillable =[ 
        'title',
        'imagen',
        'data',
        'price',
    ];
}
// i dati devono essere riempiti dentro un array