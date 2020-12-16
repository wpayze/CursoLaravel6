<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;

class autorController extends Controller
{
    public function index() {

        $autores = Autor::get();

        return view("autor.index", ["autores" => $autores]);
    }

    public function show($id) {
        $autor = Autor::find($id);
        return view("autor.show", compact("autor"));
    }

    public function create() {
        return view("autor.create");
    }

    public function store (Request $request) {
        $request->validate([
            "nombre" => "required|min:5",
            "fecha_nacimiento" => "required|date"
        ]);

        Autor::create( $request->all() );

        return redirect()->route("autores.index")->with("exitoso", "Autor creado exitosamente.");
    }

    public function destroy ($id) {

        $autor = Autor::find($id);

        if ( sizeof( $autor->libros ) > 0 ) {
            //NO BORRAR

            $mensajes = [];

            foreach ( $autor->libros as $libro ) {
                array_push($mensajes, $libro->titulo);
            }

            return redirect()->route("autores.index")->with("fallido", "El autor no se puede borrar debido a que estos libros la contienen: ")->with("mensajes", $mensajes);

        } else {
            //BORRAR
            $autor->delete();
            return redirect()->route("autores.index")->with("exitoso", "Autor borrado exitosamente.");
        }
    }

    public function edit ($id) {
        $autor = Autor::find($id);
        return view("autor.update", compact("autor"));
    }

    public function update(Request $request, $id) {

        $request->validate([
            "nombre" => "required|min:5",
            "fecha_nacimiento" => "required|date"
        ]);

        $autor = Autor::find($id);
        $autor->update( $request->all() );
            
        return redirect()->route("autores.index")->with("exitoso", "Autor actualizado exitosamente.");
    }
}
