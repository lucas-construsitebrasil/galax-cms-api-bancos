<?php

namespace App\Repository\V1;

use App\Models\V1\Metodos as MetodosModel;
use App\Repository\Interfaces\Metodos as InterfacesMetodos;
use Illuminate\Database\Eloquent\Collection;

class Metodos extends BaseRepository implements InterfacesMetodos
{
 
    public function index(): Collection
    {
        return $this->model::all();
    }

    public function show(int $id): MetodosModel
    {
        return $this->model::where('id_metodo', $id)->first();
    }

}
