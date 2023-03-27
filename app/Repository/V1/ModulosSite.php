<?php

namespace App\Repository\V1;

use App\Repository\Interfaces\ModulosSite as InterfacesModulosSite;
use Illuminate\Database\Eloquent\Collection;

class ModulosSite extends BaseRepository implements InterfacesModulosSite
{
    public function index(): Collection
    {
        return $this->model::all();
    }

    public function show($request): Collection
    {
        return $this->model::all($request);
    }

    public function create(): Collection
    {
        return $this->model::all();
    }

    public function delete($id)
    {
        return $this->model::where('id_modulossite' , $id)->delete();
    }
}
