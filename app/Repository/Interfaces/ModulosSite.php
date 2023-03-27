<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface ModulosSite
{
    public function index(): Collection;

    public function show($request): Collection;
    
    public function create(): Collection;

    public function delete($id);

}
