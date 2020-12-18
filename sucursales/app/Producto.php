<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ["nombre", "sucursal_id", "existencia"];

    public function sucursal() {
        return $this->belongsTo(Sucursal::class);
    }
}
