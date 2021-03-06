<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CuestionarioRepository;

class CuestionarioController extends Controller
{
    private $cuestionarioRepository;

    public function __construct(CuestionarioRepository $cuestionarioRepository) {
        $this->middleware("auth");
        $this->cuestionarioRepository = $cuestionarioRepository;
    }

    public function create() {
        return view("cuestionario.create");
    }

    public function store(Request $request) {

        $data = $request->validate([
            "titulo" => "required",
            "descripcion" => "required"
        ]);

        $cuestionario = $this->cuestionarioRepository->crear( auth()->user(), $data);

        return redirect("/cuestionarios/" . $cuestionario->id);
    }

    public function show (\App\Cuestionario $cuestionario) {
        $cuestionario->load("preguntas.respuestas");
        return view("cuestionario.show", compact("cuestionario"));
    }
}
