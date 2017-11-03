<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'cantidad', 'incidente_id'];
}
