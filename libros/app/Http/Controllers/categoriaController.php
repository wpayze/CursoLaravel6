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

        return redirect()->route("categorias.index")->with("exitoso", "Categoria creada exitosamente.");
    }

    public function destroy ($id) {

        $categoria = Categoria::find($id);

        if ( sizeof( $categoria->libros ) > 0 ) {
            //NO BORRAR

            $mensajes = [];

            foreach ( $categoria->libros as $libro ) {
                array_push($mensajes, $libro->titulo);
            }

            return redirect()->route("categorias.index")->with("fallido", "La categoria no se puede borrar debido a que estos libros la contienen: ")->with("mensajes", $mensajes);

        } else {
            //BORRAR
            $categoria->delete();
            return redirect()->route("categorias.index")->with("exitoso", "Categoria borrada exitosamente.");
        }
    }

    public function edit ($id) {
        $categoria = Categoria::find($id);
        return view("categoria.update", compact("categoria"));
    }

    public function update(Request $request, $id) {

        $request->validate([
            "nombre" => "required"
        ]);

        $categoria = Categoria::find($id);
        $categoria->update( $request->all() );
            
        return redirect()->route("categorias.index")->with("exitoso", "Categoria actualizada exitosamente.");
    }
}
