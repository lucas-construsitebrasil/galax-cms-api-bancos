<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface Metodos
{
    public function index(): Collection;

    public function show(int $id): Collection;
}
