<?php

namespace App\Repository\V1;

use App\Repository\Interfaces\Test as InterfacesTest;
use Illuminate\Database\Eloquent\Collection;

class Test extends BaseRepository implements InterfacesTest
{
    public function test(): Collection
    {
        return $this->model::all();
    }
}
