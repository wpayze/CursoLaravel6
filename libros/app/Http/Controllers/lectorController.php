<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lector;

class lectorController extends Controller
{
    public function index() {

        $lectores = Lector::get();

        return view("lector.index", ["lectores" => $lectores] );
    }

    public function show ($id) {
        
        $lector = Lector::find($id);
        
        return view("lector.show", compact("lector") );
    }

    public function create () {
        return view("lector.create");
    }

    public function store(Request $request) {
        $request->validate([
            "nombre" => "required",
            "telefono" => "required",
            "direccion" => "required|min:10"
        ]);
        
        Lector::create( $request->all() );
        return redirect()->route("lectores.index")->with("exitoso", "Lector agregado exitosamente.");
    }

    public function destroy ($id) {

        $lector = Lector::find($id);

        if ( sizeof( $lector->alquileres ) > 0 ) {
            //NO BORRAR
            $mensajes = [];

            foreach ( $lector->alquileres as $alquiler ) {
                array_push($mensajes, $alquiler->id);
            }

            return redirect()->route("lectores.index")->with("fallido", "El lector no se puede borrar debido a que estos alquileres lo contienen: ")->with("mensajes", $mensajes);
        } else {
            //BORRAR
            $lector->delete();
            return redirect()->route("lectores.index")->with("exitoso", "Lector borrado exitosamente.");
        } 
    }

    public function edit ($id) {
        $lector = Lector::find($id);
        return view("lector.update", compact("lector"));
    }

    public function update(Request $request, $id) {

        $request->validate([
            "nombre" => "required",
            "telefono" => "required",
            "direccion" => "required|min:10"
        ]);

        $lector = Lector::find($id);
        $lector->update( $request->all() );
            
        return redirect()->route("lectores.index")->with("exitoso", "Lector actualizado exitosamente.");
    }

}
