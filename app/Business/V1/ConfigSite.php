<?php

namespace App\Business\V1;

use App\Business\V1\Business;

class ConfigSite
{
    use Business;

    public function index()
    {
        return $this->repository->index();
    }

    public function getNumModelo(){
        return $this->index()->all()['0']->num_modelo;
    }
}