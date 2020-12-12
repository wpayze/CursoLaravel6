<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ["nombre"];

    public function libros () {
        return $this->hasMany(Libro::class);
    }
}
