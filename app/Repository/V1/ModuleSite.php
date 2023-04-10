<?php

namespace App\Repository\V1;

use App\Repository\Interfaces\ModuleSite as InterfacesModuleSite;
use Illuminate\Database\Eloquent\Collection;

class ModuleSite extends BaseRepository implements InterfacesModuleSite
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

    public function create(array $moduleSiteToInsert): Collection
    {
        return $this->model::all();
    }

    public function getModulePorNomePagina(string $nomePag)
    {
        $this->model::where('nome_pagina_modulosite' , $nomePag)->get();
    }

    public function delete($id)
    {
        return $this->model::where('id_modulossite' , $id)->delete();
    }
}
