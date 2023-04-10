<?php

namespace App\Business\V1;

use App\Business\V1\Business;

class Imagens
{
    use Business;

    public function getImgsWidthAndHeight(string $idModuloDispo, string $numModelo)
    {
        return $this->repository->getImgsWidthAndHeight($idModuloDispo, $numModelo);
    }
}