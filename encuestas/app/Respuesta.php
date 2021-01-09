<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $fillable = ["texto"];

    public function pregunta() {
        return $this->belongsTo(Pregunta::class);
    }

    public function responses() {
        return $this->hasMany(EncuestaResponse::class);
    }
}
