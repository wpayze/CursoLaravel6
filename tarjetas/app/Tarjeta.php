<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    protected $table = "tarjetas";

    protected $fillable = [
        "persona_id",
        "tipo",
        "numero",
        "expiracion"
    ];

    public function persona () {
        return $this->belongsTo(Persona::class);
    }
}
