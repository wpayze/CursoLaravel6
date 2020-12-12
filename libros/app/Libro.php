<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        "autor_id",
        "categoria_id",
        "editorial_id",
        "titulo",
        "fecha_lanzamiento",
        "idioma",
        "paginas",
        "descripcion"
    ];

    public function autor() {
        return $this->belongsTo(Autor::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function editorial () {
        return $this->belongsTo(Editorial::class);
    }

    public function alquileres () {
        return $this->hasMany(Alquiler::class);
    }
}
