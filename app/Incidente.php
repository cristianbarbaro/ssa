<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    protected $fillable = ['user_id', 'descripcionIncidente', 'fechaIncidente'];

    public function objetos()
    {
        return $this->hasMany('App\Objeto');
    }
}
