<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function usuarios () {
        return "HOLA MUNDO";
    }

    public function usuarioPorId ($id) {
        $usuarios = [
            [
                "id" => "100",
                "nombre" => "Ronald"
            ],
            [
                "id" => "250",
                "nombre" => "Melvin"
            ],
            [
                "id" => "300",
                "nombre" => "Karen"
            ]
        ];
    
        $usuario = ["nombre" => "NO EXISTE"];
    
        foreach($usuarios as $struct) {
            if ($id == $struct["id"]) {
                $usuario = $struct;
                break;
            }
        }
    
        return "El Nombre del usuario es: " . $usuario["nombre"] ;
    }
}
