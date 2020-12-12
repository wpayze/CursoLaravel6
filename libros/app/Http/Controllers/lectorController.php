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
}
