<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class contactoController extends Controller
{
    public function create() {
        return view("contacto");
    }

    public function store(Request $request) {
        $datos = $request->validate([
                    "nombre" => "required",
                    "mensaje" => "required",
                    "correo" => "required|email"
                ]);
        
        Mail::to("wilfredopaizpaz@gmail.com")->send(new ContactoMail($datos));

        dd("MENSAJE ENVIADO");
    }
}
