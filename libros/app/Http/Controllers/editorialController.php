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
}
