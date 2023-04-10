<?php

namespace App\Repository\Interfaces;

use App\Models\V1\Funcionalidades as FuncionalidadesModel;
use Illuminate\Database\Eloquent\Collection;

interface Funcionalidades
{
    public function show(int $id) : FuncionalidadesModel;
}
