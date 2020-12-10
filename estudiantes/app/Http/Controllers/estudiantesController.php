<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;

class estudiantesController extends Controller
{
    public function index () {

        $estudiantes = Estudiante::get();

        return view("estudiantes", [ "estudiantes" => $estudiantes ]);
    }
}
