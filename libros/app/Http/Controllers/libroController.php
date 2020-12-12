<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class libroController extends Controller
{
    public function index() {
        $libros = Libro::get();

        return view("libro.index", ["libros" => $libros]);
    }

    public function show($id) {
        $libro = Libro::find($id);
        return view("libro.show", compact("libro"));
    }
}
