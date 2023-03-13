<?php

namespace App\Facades\Auth;

use App\Models\V1\Account\DatabaseContract;
use Illuminate\Support\Facades\Facade;

class DataBaseFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return DatabaseContract::class;
    }
}
