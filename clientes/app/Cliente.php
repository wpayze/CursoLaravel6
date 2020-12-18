<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use SoftDeletes;
    
    protected $table = "clientes";
    protected $fillable = ["nombre", "edad", "activo"];

    public function scopeActivos ($query) {
        return $query->where("activo", 1);
    }

    public function scopeInactivos ($query) {
        return $query->where("activo", 0);
    }

    public function scopeMayores($query) {
        return $query->where("edad", ">", "21");
    }

    public function scopeMenores($query) {
        return $query->where("edad", "<", "21");
    }
}
