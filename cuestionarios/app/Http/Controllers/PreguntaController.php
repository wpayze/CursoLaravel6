<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PreguntaRepository;
use App\Repositories\RespuestaRepository;

use App\Cuestionario;

class PreguntaController extends Controller
{
    private $preguntaRepository,$respuestaRepository;

    public function __construct(PreguntaRepository $preguntaRepository, RespuestaRepository $respuestaRepository) {
        $this->middleware("auth");
        $this->preguntaRepository = $preguntaRepository;
        $this->respuestaRepository = $respuestaRepository;
    }

    public function create(Cuestionario $cuestionario) {
        return view("pregunta.create", compact("cuestionario"));
    }

    public function store(Cuestionario $cuestionario) {
        $data = request()->validate([
            "pregunta.texto" => "required",
            "respuestas.*.texto" => "required"
        ]);

        $pregunta = $this->preguntaRepository->crear($cuestionario, $data["pregunta"]);
        $respuestas = $this->respuestaRepository->crear($pregunta, $data["respuestas"]);

        return redirect("/cuestionarios/" . $cuestionario->id);
    }
}
