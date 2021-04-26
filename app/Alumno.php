<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //Éstos son los campos permitidos para create y edit
    protected $fillable = ['nombre', 'apellidos', 'fecha_nac', 'ciudad', 'escuela_id'];

    //Añadimos la clave foránea a escuela_id a Alumnos
    public function escuela()
    {
        return $this->belongsTo(Escuela::class);
    }

}

