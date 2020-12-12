<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alquiler;

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
}
