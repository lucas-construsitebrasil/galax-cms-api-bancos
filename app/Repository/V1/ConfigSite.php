<?php

namespace App\Repository\V1;

use App\Repository\Interfaces\ConfigSite as InterfacesConfigSite;
use Illuminate\Database\Eloquent\Collection;

class ConfigSite extends BaseRepository implements InterfacesConfigSite
{
    public function index(): Collection
    {
        return $this->model::all();
    }
}
