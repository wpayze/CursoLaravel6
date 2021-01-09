<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncuestaResponse extends Model
{
    protected $guarded = [];

    public function encuesta() {
        return $this->belongsTo(Encuesta::class);
    }
}
