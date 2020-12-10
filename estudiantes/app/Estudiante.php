<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = [ "nombre" , "apellido" , "grado", "escuela_id" ];

    public function escuela () {
        return $this->belongsTo(Escuela::class);
    }

    public function clases () {
        return $this->belongsToMany(Clase::class)->withTimeStamps();
    }
}
