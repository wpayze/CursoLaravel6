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
}
