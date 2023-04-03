<?php

namespace App\Business\V1;

use App\Business\V1\Business;

class Metodos
{
    use Business;

    public function show(int $idMetodo)
    {
        return $this->repository->show($idMetodo);
    }
}