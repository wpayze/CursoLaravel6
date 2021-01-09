<?php

namespace App\Repositories;

use App\Cuestionario;

class RespuestaRepository {

    public function crear($pregunta, $data) {
        return $pregunta->respuestas()->createMany($data);
    }

}
