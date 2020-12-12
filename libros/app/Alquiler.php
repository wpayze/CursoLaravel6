<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $table = "alquileres";
    protected $fillable = [ "lector_id", "libro_id", "fecha_salida", "fecha_entrada" ];

    public function libro () {
        return $this->belongsTo(Libro::class);
    }

    public function lector () {
        return $this->belongsTo(Lector::class);
    }
}
