<?php

namespace App\Repository\V1;

use App\Repository\Interfaces\Funcionalidades as InterfacesFuncionalidades;
use Illuminate\Database\Eloquent\Collection;

class Test extends BaseRepository implements InterfacesFuncionalidades
{
    public function show(int $id): Collection
    {
        return $this->model->findById($id);
    }
}
