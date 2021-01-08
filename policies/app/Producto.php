<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ["nombre", "precio", "categoria"];

    public function scopeActivo ($query) {
        return $query->where("activo", 1);
    }

    public function scopeInactivo ($query) {
        return $query->where("activo", 0);
    }
}
