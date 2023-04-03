<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface Module
{
    public function index(): Collection;

    public function show(int $id): Collection;
    
    public function create(array $moduleSiteToInsert): Collection;

    public function delete($id);

}
