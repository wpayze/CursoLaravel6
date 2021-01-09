<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuestionario;

class EncuestaController extends Controller
{
    public function show(Cuestionario $cuestionario, $slug) {
        $cuestionario->load("preguntas.respuestas");
        return view("encuesta.show", compact("cuestionario"));
    }

    public function store(Cuestionario $cuestionario) {

        $data = request()->validate([
            'responses.*.respuesta_id' => "required",
            'responses.*.pregunta_id' => "required",
            'encuesta.nombre' => "required",
            'encuesta.email' => "required|email"
        ]);

        $encuesta = $cuestionario->encuestas()->create($data["encuesta"]);
        $encuesta->responses()->createMany($data["responses"]);

        return "GRACIAS!";
    }
}
