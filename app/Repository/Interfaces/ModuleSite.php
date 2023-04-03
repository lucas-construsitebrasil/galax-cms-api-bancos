<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface ModuleSite
{
    public function index(): Collection;

    public function show(int $id): Collection;
    
    public function create(array $moduleSiteToInsert): Collection;

    public function delete($id);

}
