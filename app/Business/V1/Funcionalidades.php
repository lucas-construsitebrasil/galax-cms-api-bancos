<?php

namespace App\Business\V1;

use App\Business\V1\Business;

class Funcionalidades
{
    use Business;

    public function show(int $id)
    {
        return $this->repository->show($id);
    }
}