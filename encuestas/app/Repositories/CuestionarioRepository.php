<?php

namespace App\Repositories;

use App\Cuestionario;

class CuestionarioRepository {

    public function crear($user, $data) {
        return $user->cuestionarios()->create($data);
    }

}
