<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Client\Request;

class ModuleDispoInovacao extends Controller
{
    public function show(int $moduleDispoInovacaoId)
    {
        return $this->business->show($moduleDispoInovacaoId);
    }
}