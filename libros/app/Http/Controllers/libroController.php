<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

use App\Autor;
use App\Editorial;
use App\Categoria;

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

    public function create() {
        $autores     = Autor::get();
        $categorias  = Categoria::get();
        $editoriales = Editorial::get();

        $idiomas = ["EN", "ES", "FR", "DE"];

        return view("libro.create", compact("autores","categorias", "editoriales", "idiomas") );
    }

    public function store(Request $request) {
        $request->validate([
            "autor_id" => "required",
            "editorial_id" => "required",
            "categoria_id" => "required",
            "titulo" => "required|min:8",
            "descripcion" => "required|min:15",
            "paginas" => "required",
            "idioma" => "required",
            "fecha_lanzamiento" => "required|date",
        ]);

        Libro::create( $request->all() );

        return redirect()->route("libros.index")->with("exitoso", "Libro creado exitosamente.");
    }

    public function destroy ($id) {

        $libro = Libro::find($id);

        if ( sizeof( $libro->alquileres ) > 0 ) {
            //NO BORRAR
            return redirect()->route("libros.index")->with("fallido", "El libro no se puede borrar debido a que " . count($libro->alquileres) . " alquileres lo contienen.");
        } else {
            //BORRAR
            $libro->delete();
            return redirect()->route("libros.index")->with("exitoso", "Libro borrado exitosamente.");
        } 
    }

    public function edit ($id) {
        $autores     = Autor::get();
        $categorias  = Categoria::get();
        $editoriales = Editorial::get();

        $idiomas = ["EN", "ES", "FR", "DE"];

        $libro = Libro::find($id);

        return view("libro.update", compact("libro","autores", "categorias", "editoriales", "idiomas"));
    }

    public function update(Request $request, $id) {

        $request->validate([
            "autor_id" => "required",
            "editorial_id" => "required",
            "categoria_id" => "required",
            "titulo" => "required|min:8",
            "descripcion" => "required|min:15",
            "paginas" => "required",
            "idioma" => "required",
            "fecha_lanzamiento" => "required|date",
        ]);

        $libro = Libro::find($id);
        $libro->update( $request->all() );
            
        return redirect()->route("libros.index")->with("exitoso", "Libro actualizado exitosamente.");
    }

}
