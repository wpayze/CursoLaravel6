<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = "autores";
    protected $fillable = ["nombre", "fecha_nacimiento"];

    public function libros () {
        return $this->hasMany(Libro::class);
    }
}
