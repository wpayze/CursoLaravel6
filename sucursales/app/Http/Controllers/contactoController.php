<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function create() {
        return view("contacto");
    }

    public function store(Request $request) {
        dd($request->all());
    }
}
