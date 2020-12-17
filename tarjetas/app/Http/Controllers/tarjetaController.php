<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarjeta;

class tarjetaController extends Controller
{
    public function index() {
        $tarjetas = Tarjeta::get();
        return view("tarjetas", compact("tarjetas"));
    }
}