<?php

namespace App\Business\V1;

use App\Business\V1\Business;
use App\Repository\V1\Imagens;

class ModuleDispoInovacao
{
    use Business;

    private static $dimensaoSlide = array(
        '1' => array('height' => '400', 'width' => '1168'),
        '2' => array('height' => '550', 'width' => '1170'),
        '3' => array('height' => '500', 'width' => '1168'),
        '4' => array('height' => '730', 'width' => '1920'),
        '5' => array('height' => '580', 'width' => '1170'),
        '6' => array('height' => '535', 'width' => '1583'),
        '7' => array('height' => '520', 'width' => '1170'),
        '8' => array('height' => '500', 'width' => '1585'),
        '9' => array('height' => '600', 'width' => '1660'),
        '10' => array('height' => '600', 'width' => '1660'),
    );
    
    public function show(int $moduleDispoInovacaoId)
    {
        return $this->repository->show($moduleDispoInovacaoId);
    }

    public function getImgsWidth($idModuloDispo){
        return $this->getImgsWidthAndHeight($idModuloDispo)->width_img;
    }

    public function getImgsHeight($idModuloDispo){
        return $this->getImgsWidthAndHeight($idModuloDispo)->height_img;
    }

    public static function getSlideHeight(){
        return self::$dimensaoSlide[(new ConfigSite)->getNumModelo()]['height'];
    }

    public static function getSlideWidth(){
        return self::$dimensaoSlide[(new ConfigSite)->getNumModelo()]['width'];
    }

    private function getImgsWidthAndHeight(string $idModuloDispo){
        return (new Imagens)->getImgsWidthAndHeight($idModuloDispo, (new ConfigSite)->getNumModelo());
    }
}
