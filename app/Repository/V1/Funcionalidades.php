<?php

namespace App\Repository\V1;

use App\Models\V1\Funcionalidades as FuncionalidadesModel;
use App\Repository\Interfaces\Funcionalidades as InterfacesFuncionalidades;
use Illuminate\Database\Eloquent\Collection;

class Funcionalidades extends BaseRepository implements InterfacesFuncionalidades
{
    public function show(int $id) : FuncionalidadesModel
    {
        return $this->model->where('id_funcionalidade', $id)->first();
    }
}
