<?php

namespace App\Repository\V1;

use App\Models\V1\Imagens as ImagensModel;
use App\Repository\Interfaces\Imagens as InterfacesImagens;
use Illuminate\Database\Eloquent\Collection;

class Imagens extends BaseRepository implements InterfacesImagens
{
    public function getImgsWidthAndHeight(string $idModuloDispo, string $numModelo){
        return $this->model->where('fk_id_moduloinovacao', $idModuloDispo)->where('fk_id_modelo_modelos', $numModelo)->first();
    }
}
