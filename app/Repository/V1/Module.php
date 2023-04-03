<?php

namespace App\Repository\V1;

use App\Repository\Interfaces\Module as InterfacesModule;
use Illuminate\Database\Eloquent\Collection;

class Module extends BaseRepository implements InterfacesModule
{
    public function index(): Collection
    {
        return $this->model::all();
    }

    public function show(int $id): Collection
    {
        $module = $this->model->findById($id);
        return $module;
    }

    public function create(array $data): Collection
    {
        return $this->model::all();
    }

    public function delete($id)
    {
        return $this->model::where('id_modulo' , $id)->delete();
    }

    public function getModuleByTableName(string $nameTable)
    {
        return $this->model::where('nome_tabela_modulo' ,$nameTable)->get();
    }
}
