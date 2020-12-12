<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class categoriaController extends Controller
{
    public function index() {

        $categorias = Categoria::get();

        return view("categoria.index", ["categorias" => $categorias]);
    }

    public function show (Categoria $categoria) {
        return view("categoria.show", ["categoria" => $categoria] );
    }

    public function create () {
        return view('categoria.create');
    }

    public function store(Request $request) {
        
        $request->validate([
            "nombre" => "required"
        ]);

        Categoria::create( $request->all() );

        return redirect()->route("categorias.index");
    }
}
