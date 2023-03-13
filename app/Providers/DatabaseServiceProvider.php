<?php

namespace App\Providers;

use App\Models\V1\Account\DataBase;
use App\Models\V1\Account\DatabaseContract;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DatabaseContract::class, function ($app) {
            return new DataBase();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
