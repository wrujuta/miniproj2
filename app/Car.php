<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function cars()
    {
        return $this->hasMany('App\Cars');
    }
}

