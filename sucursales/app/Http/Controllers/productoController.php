<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class productoController extends Controller
{
    public function index($cantidad) {

        $productos = Producto::with("sucursal")->paginate($cantidad);
        
        return view("productos", compact("productos"));
    }
}
