<?php

namespace App\Repository\V1;

use App\Repository\Interfaces\ModuleDispoInovacao as InterfacesModuleDispoInovacao;
use Illuminate\Database\Eloquent\Collection;

class ModuleDispoInovacao extends BaseRepository implements InterfacesModuleDispoInovacao
{
    public function show(int $id)
    {
        return $this->model->where('id_modulo', $id)->first()->get();
    }
}
