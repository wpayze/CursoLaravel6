<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escuela;

class escuelasController extends Controller
{
    public function index () {

        $escuelas = Escuela::get();

        return view("escuelas", [ "escuelas" => $escuelas ]);
    }
}
