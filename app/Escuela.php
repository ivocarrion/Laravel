<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $fillable = ['nombre', 'direccion', 'logotipo', 'email', 'telefono', 'web'];
}

