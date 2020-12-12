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
}
