<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function postDetail(){
        return $this->belongsTo(PostDetail::class);
    }

    


}
// i dati devono essere riempiti dentro un array