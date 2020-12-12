<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lector extends Model
{
    protected $table = "lectores";
    protected $fillable = ["nombre", "telefono", "direccion"];
    
    public function alquileres () {
        return $this->hasMany(Alquiler::class);
    }
}
