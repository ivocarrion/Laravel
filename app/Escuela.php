<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    //Éstos son los campos permitidos para create y edit
    protected $fillable = ['nombre', 'direccion', 'logotipo', 'email', 'telefono', 'web'];
}

