<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $fillable = ["texto"];

    public function cuestionario() {
        return $this->belongsTo(Cuestionario::class);
    }

    public function respuestas() {
        return $this->hasMany(Respuesta::class);
    }

    public function responses() {
        return $this->hasMany(EncuestaResponse::class);
    }
}
