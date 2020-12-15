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
}
