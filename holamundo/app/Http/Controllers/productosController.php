<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    public function home () {
        return view("productos.index");
    }

    public function acerca() {
        return view("productos.about");
    }

    public function productos () {

        $bd = [
            [
                "id" => "1",
                "nombre" => "Carro",
                "precio" => "100000"   
            ],
            [
                "id" => "2",
                "nombre" => "Computadora",
                "precio" => "20000"
            ],
            [
                "id" => "3",
                "nombre" => "Pelota",
                "precio" => "100"
            ],
            [
                "id" => "4",
                "nombre" => "Desinfectante",
                "precio" => "50"
            ],
            [
                "id" => "5",
                "nombre" => "Celular",
                "precio" => "1500"
            ]
        ];

        return view("productos.products", [ "productos" => $bd ] );
    }
}
