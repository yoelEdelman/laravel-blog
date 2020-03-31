<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //

    public function category(){

        return $this->belongsTo(category::class);

    }

    public function user(){

        return $this->belongsTo(User::class);
    }


}
