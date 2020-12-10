<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $fillable = [ "nombre" ];

    public function estudiantes () {
        return $this->belongsToMany(Estudiante::class)->withTimeStamps();
    }
}
