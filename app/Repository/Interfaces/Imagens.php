<?php

namespace App\Repository\Interfaces;

use App\Models\V1\Imagens as ImagensModel;
use Illuminate\Database\Eloquent\Collection;

interface Imagens
{
    public function getImgsWidthAndHeight(string $idModuloDispo, string $numModelo);
}
