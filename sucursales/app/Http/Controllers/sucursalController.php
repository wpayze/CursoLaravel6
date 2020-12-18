<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;

class sucursalController extends Controller
{
    public function index() {
        $sucursales = Sucursal::get();
        return view("sucursales", compact("sucursales"));
    }
}
