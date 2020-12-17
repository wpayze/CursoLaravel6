<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "personas";

    protected $fillable = [
        "nombre",
        "apellido",
        "correo",
        "telefono",
        "direccion",
        "usuario",
        "empresa"
    ];

    public function tarjetas () {
        return $this->hasMany(Tarjeta::class);
    }
}
