<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $fillable = [ "nombre" , "celular" ];

    public function estudiantes() {
        return $this->hasMany(Estudiante::class);
    }
}
