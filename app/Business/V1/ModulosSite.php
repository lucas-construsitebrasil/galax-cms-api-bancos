<?php

namespace App\Business\V1;

use App\Business\V1\Business;
use App\Business\V1\Modulos;

class ModulosSite
{
    use Business;
    use Modulos;

    public function index()
    {
        return $this->repository->test();
    }

    public function show($request)
    {
        return $this->repository->show($request);
    }

    public function create()
    {
        return $this->repository->create();
    }

    public function delete($request)
    {
        $request->only('id');
        $moduleSite = $this->show($request->id);
        (new Modulos)->delete($moduleSite->fk_id_modulo_modulos);
        $this->repository->delete($moduleSite->id);
    }
}
