<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface Funcionalidades
{
    public function show(int $id): Collection;
}
