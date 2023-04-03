<?php

namespace App\Business\V1;

use App\Business\V1\Business;
use App\Business\V1\Metodos;
use App\lib\Util;

class Module
{
    use Business;

    public function index()
    {
        return $this->repository->index();
    }

    public function show()
    {
        return $this->repository->show();
    }

    public function create()
    {
        return $this->repository->create();
    }

    public function delete()
    {
        return $this->repository->delete();
    }

    public function createModule(string $nomeModulo, Metodos $metodo)
    {
        $funcionalidade = (new Funcionalidades)->show($metodo['fk_id_funcionalidade_funcionalidades']);
        $nameTbl = Util::montaNomeTBL($funcionalidade['nome_funcionalidade']);
        $nameTbl = $this->treatTableName($nameTbl);
    }

    private function getModuleByTableName(string $nameTable)
    {
        return $this->repository->getModuleByTableName($nameTable);
    }

    private function treatTableName(string $nameTable)
    {
        $module = $this->getModuleByTableName($nameTable);
        if ($module) {
            return $nameTable . (count($module)+ 1);
        }
        
    }
}