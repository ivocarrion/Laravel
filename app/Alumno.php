<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['nombre', 'apellidos', 'fecha_nac', 'ciudad', 'escuela_id'];


    public function escuela()
    {
        return $this->belongsTo(Escuela::class);
    }

}

