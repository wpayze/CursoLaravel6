<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editorial;

class editorialController extends Controller
{
    public function index() {

        $editoriales = Editorial::get();

        return view("editorial.index", ["editoriales" => $editoriales ]);
    }

    public function show ($id) {
        $editorial = Editorial::find($id);
        return view("editorial.show", compact("editorial"));
    }

    public function create() {
        return view("editorial.create");
    }

    public function store(Request $request) {
        $request->validate([
            "nombre" => "required|min:5"
        ]);

        Editorial::create( $request->all() );
        return redirect()->route("editoriales.index")->with("exitoso", "Editorial creado exitosamente.");
    }

    public function destroy ($id) {

        $editorial = Editorial::find($id);

        if ( sizeof( $editorial->libros ) > 0 ) {
            //NO BORRAR

            $mensajes = [];

            foreach ( $editorial->libros as $libro ) {
                array_push($mensajes, $libro->titulo);
            }

            return redirect()->route("editoriales.index")->with("fallido", "El editorial no se puede borrar debido a que estos libros lo contienen: ")->with("mensajes", $mensajes);

        } else {
            //BORRAR
            $editorial->delete();
            return redirect()->route("editoriales.index")->with("exitoso", "Editorial borrado exitosamente.");
        }
    }

    public function edit ($id) {
        $editorial = Editorial::find($id);
        return view("editorial.update", compact("editorial"));
    }

    public function update(Request $request, $id) {

        $request->validate([
            "nombre" => "required|min:5"
        ]);

        $editorial = Editorial::find($id);
        $editorial->update( $request->all() );
            
        return redirect()->route("editoriales.index")->with("exitoso", "Editorial actualizado exitosamente.");
    }
    
}
