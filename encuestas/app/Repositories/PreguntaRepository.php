<?php

namespace App\Repositories;

use App\Cuestionario;

class PreguntaRepository {

    public function crear($cuestionario, $data) {
        return $cuestionario->preguntas()->create($data);
    }

}
