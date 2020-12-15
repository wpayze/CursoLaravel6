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
}
