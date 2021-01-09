<?php

namespace App\Repositories;

class CuestionarioRepository {

    public function crear($user, $data) {
        return $user->cuestionarios()->create($data);
    }

}
