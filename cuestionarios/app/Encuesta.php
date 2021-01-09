<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $guarded = [];

    public function cuestionario() {
        return $this->belongsTo(Cuestionario::class);
    }

    public function responses() {
        return $this->hasMany(EncuestaResponse::class);
    }
}
