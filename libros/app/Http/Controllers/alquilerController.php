<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alquiler;
use App\Libro;
use App\Lector;

class alquilerController extends Controller
{
    public function index() {

        $alquileres = Alquiler::get();

        return view("alquiler.index", ["alquileres" => $alquileres]);
    }

    public function show($id) {
        $alquiler = Alquiler::find($id);
        return view("alquiler.show", compact("alquiler"));
    }

    public function create() {

        $libros = Libro::get();
        $lectores = Lector::get();

        return view("alquiler.create", compact('libros', 'lectores') );
    }

    public function store(Request $request) {
        
        $request->validate([
            "lector_id" => "required",
            "libro_id" => "required",
            "fecha_entrada" => "required|date",
            "fecha_salida" => "required|date"
        ]);

        Alquiler::create( $request->all() );

        return redirect()->route("alquileres.index")->with("exitoso", "Alquiler generado exitosamente.");
    }

    public function destroy ($id) {

        $alquiler = Alquiler::find($id);
        $alquiler->delete();
        return redirect()->route("alquileres.index")->with("exitoso", "Alquiler borrado exitosamente.");
    }

    public function edit ($id) {

        $libros = Libro::get();
        $lectores = Lector::get();
        $alquiler = Alquiler::find($id);

        return view("alquiler.update", compact("alquiler", "libros", "lectores"));
    }

    public function update(Request $request, $id) {

        $request->validate([
            "lector_id" => "required",
            "libro_id" => "required",
            "fecha_entrada" => "required|date",
            "fecha_salida" => "required|date"
        ]);

        $alquiler = Alquiler::find($id);
        $alquiler->update( $request->all() );
            
        return redirect()->route("alquileres.index")->with("exitoso", "Alquiler actualizado exitosamente.");
    }

    
}
