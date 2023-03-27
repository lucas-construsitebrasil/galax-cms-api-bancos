<?php

namespace App\Business\V1;

use App\Business\V1\Business;

class Modulos
{

    use Business;

    private function getModuleById(int $id)
    {
        return $this->repository->getModuleById();
    }

    public function delete(int $id) : void
    {
        $this->deleteModule($id);
        $this->deleteModuleTable($id);
    }

    private function deleteModule($id) : void
    {
        $this->repository->deleteModule($id);
    }

    private function deleteModuleTable($id) : void
    {
        $module = $this->getModuleById($id);
        $this->repository->deleteModuleTable($module->nome_tabela_modulo);
    }
}