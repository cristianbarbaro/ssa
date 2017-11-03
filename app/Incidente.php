<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    //

    public function objetos()
    {
        return $this->hasMany('App\Objeto');
    }
}
