<?php

namespace App\Providers;

use App\Repository\Interfaces\Test as TestContract;
use App\Repository\Interfaces\ModuleSite as ModuleSiteContract;
use App\Repository\Interfaces\Module as ModuleContract;
use App\Repository\Interfaces\ModuleDispoInovacao as ModuleDispoInovacaoContract;
use App\Repository\Interfaces\Metodos as MetodosContract;
use App\Repository\Interfaces\Funcionalidades as FuncionalidadesContract;
use App\Repository\Interfaces\ConfigSite as ConfigSiteContract;
use App\Repository\V1\ConfigSite;
use App\Repository\V1\Test;
use App\Repository\V1\ModuleSite;
use App\Repository\V1\Module;
use App\Repository\V1\Metodos;
use App\Repository\V1\ModuleDispoInovacao;
use App\Repository\V1\Funcionalidades;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(TestContract::class, function ($app) {
            return new Test();
        });

        $this->app->bind(ModuleSiteContract::class, function ($app) {
            return new ModuleSite();
        }); 

        $this->app->bind(ModuleContract::class, function ($app) {
            return new Module();
        }); 

        $this->app->bind(ModuleDispoInovacaoContract::class, function ($app) {
            return new ModuleDispoInovacao();
        });

        $this->app->bind(MetodosContract::class, function ($app) {
            return new Metodos();
        }); 

        $this->app->bind(FuncionalidadesContract::class, function ($app) {
            return new Funcionalidades();
        });

        $this->app->bind(ConfigSiteContract::class, function ($app) {
            return new ConfigSite();
        }); 
    }


    public function boot()
    {
        //
    }
}
