<?php

namespace App\Business\V1;

use App\Models\V1\Metodos as MetodosModel;
use App\Business\V1\Business;
use App\Business\V1\Metodos;
use App\Lib\Util;

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

    public function createModule(string $nomePagina, MetodosModel $metodo)
    {
        $funcionalidade = (new Funcionalidades)->show($metodo->fk_id_funcionalidade_funcionalidades);
        $nameTbl = $this->treatTableName(Util::montaNomeTBL($funcionalidade->nome_funcionalidade));
        $moduloDispo = (new ModuleDispoInovacao)->show($metodo->fk_id_modulo_modulos_dispo_inovacao);
        var_dump($this->getContentToReplace($nameTbl, $metodo, $nomePagina)); die;
        //$insertSql = $this->getInsertSql($nameTbl);
    }

    private function getModuleByTableName(string $nameTable)
    {
        return $this->repository->getModuleByTableName($nameTable);
    }

    private function treatTableName(string $nameTable)
    {
        $module = $this->getModuleByTableName($nameTable);
        if ($module) {
            return $nameTable . (count($module) + 1);
        }
        
    }

    private function getTagsToReplace()
    {
        return array(
            '[QTD_IMGS_PROD]',
            '[NOME_TBL]',
            '[NOME_PAG]',
            '[SUFIXO]',
            '[ALTURA_IMG_NOTICIA]',
            '[LARGURA_IMG_NOTICIA]',
            '[EMAIL_ORCAMENTO]',
            '[NOME_INTERNO]',
            '[NOME_PLURAL]',
            '[NOME_SINGULAR]',
            '[CARACTER_MODULO]',
            '[ALTURA_SLIDE]',
            '[LARGURA_SLIDE]',
            '[ALTURA_IMG_PRODUTO]',
            '[LARGURA_IMG_PRODUTO]',
            '[ALTURA_IMG_PARCEIRO]',
            '[LARGURA_IMG_PARCEIRO]',
            '[ALTURA_IMG_GALERIA]',
            '[LARGURA_IMG_GALERIA]',
            '[TIPO_EXIBICAO_LINK_EXTERNO]',
            '[LOREM_TEXT]',
        );
    }

    private function getContentToReplace(string $nameTbl, MetodosModel $metodo, string $nomePagina)
    {
        return array(
            '9',
            $nameTbl,
            $nomePagina,
            $metodo->sufixo,
            $this->getImgsHeight($metodo->fk_id_modulo_modulos_dispo_inovacao),
            $this->getImgsWidth($metodo->fk_id_modulo_modulos_dispo_inovacao),
            'teste@teste.com',
            $metodo->nome_interno_metodo,
            $nomePagina,
            $nomePagina,
            'o',
            self::getSlideHeight(),
            self::getSlideWidth(),
            $this->getImgsHeight($metodo->fk_id_modulo_modulos_dispo_inovacao),
            $this->getImgsWidth($metodo->fk_id_modulo_modulos_dispo_inovacao),
            $this->getImgsHeight($metodo->fk_id_modulo_modulos_dispo_inovacao),
            $this->getImgsWidth($metodo->fk_id_modulo_modulos_dispo_inovacao),
            $this->getImgsHeight($metodo->fk_id_modulo_modulos_dispo_inovacao),
            $this->getImgsWidth($metodo->fk_id_modulo_modulos_dispo_inovacao),
            'NULL',



        );
    }

    private function getImgsWidth($idModuloDispo){
        return (new ModuleDispoInovacao)->getImgsWidth($idModuloDispo);
    }

    private function getImgsHeight($idModuloDispo){
        return (new ModuleDispoInovacao)->getImgsHeight($idModuloDispo);
    }

    private static function getSlideWidth(){
        return ModuleDispoInovacao::getSlideWidth();
    }

    private static function getSlideHeight(){
        return ModuleDispoInovacao::getSlideWidth();
    }
}