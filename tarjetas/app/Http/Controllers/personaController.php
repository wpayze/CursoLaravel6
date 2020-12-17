<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class personaController extends Controller
{
    public function index() {
        $personas = Persona::get();
        return view("personas", compact("personas"));
    }
}