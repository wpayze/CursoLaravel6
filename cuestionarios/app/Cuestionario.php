<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    protected $fillable = ["titulo", "descripcion"];

    public function user () {
        $this->belongsTo(User::class);
    }

    public function preguntas() {
        return $this->hasMany(Pregunta::class);
    }

    public function encuestas() {
        return $this->hasMany(Encuesta::class);
    }
}
