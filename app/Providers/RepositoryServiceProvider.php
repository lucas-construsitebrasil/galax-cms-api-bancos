<?php

namespace App\Providers;

use App\Repository\Interfaces\Test as TestContract;
use App\Repository\V1\Test;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(TestContract::class, function ($app) {
            return new Test();
        });   
    }


    public function boot()
    {
        //
    }
}
