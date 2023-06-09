<?php

namespace App\Repository\Interfaces;

use App\Models\V1\Metodos as MetodosModel;
use Illuminate\Database\Eloquent\Collection;

interface Metodos
{
    public function index(): Collection;

    public function show(int $id): MetodosModel;
}
