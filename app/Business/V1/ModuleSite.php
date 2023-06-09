<?php

namespace App\Business\V1;

use App\Http\Requests\V1\ModuleSite as ModuleSiteRequest;
use App\Business\V1\Business;
use App\Business\V1\Modulos;
use Illuminate\Http\Client\Request;
use App\Business\V1\Metodos;

class ModuleSite
{
    use Business;

    public function index()
    {
        return $this->repository->index();
    }

    public function show(Request $request)
    {
        return $this->repository->show($request);
    }

    public function create(ModuleSiteRequest $request)
    {
        $moduleSiteToInsert = $request->only('id_funcionalidade', 'id_metodo', 'nome_pagina', 'email_pagina');
        $this->validatePageName($moduleSiteToInsert['nome_pagina']);
        $this->createModule($moduleSiteToInsert['nome_pagina'], $moduleSiteToInsert['id_metodo']);
        return $this->repository->create($moduleSiteToInsert);
    }

    public function delete($request)
    {   
        
    }

    private function createModule(string $nomePagina, int $idMetodo)
    {
        $metodo = (new Metodos)->show($idMetodo);
        $module = (new Module)->createModule($nomePagina, $metodo);
    }

    private function validatePageName(string $nomePag)
    {
        $this->getModulePorNomePagina($nomePag);
    }

    private function getModulePorNomePagina(string $nomePag) : void
    {   
        if ($this->repository->getModulePorNomePagina($nomePag)){
            throw new ModulosSiteException('Nome de página já existe');
        }
    }

    private function asd()
    {

    }
}
