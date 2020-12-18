<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class productoController extends Controller
{
    public function index() {
        $productos = Producto::get();
        return view("productos", compact("productos"));
    }
}
