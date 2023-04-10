<?php

use App\Http\Controllers\V1\Controller;
use App\Http\Controllers\V1\ModuleSite;
use App\Http\Controllers\V1\Module;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function () {
    Route::group(['middleware' => ['externalAuth']], function () {
        Route::get('test', [Controller::class, 'test'])->name('test');
        Route::group(['prefix' => 'module'], function () {
            Route::get('', [Module::class, 'index'])->name('index');
        });
        Route::group(['prefix' => 'website'], function () {
            Route::get('', [ModuleSite::class, 'index'])->name('index');
            Route::post('create', [ModuleSite::class, 'create'])->name('create');
        });
    });
});

Route::get('/', function () {
    return "Bem-vindo ao Microserviço responsável pelo gereciamento dos bancos do CMS.";
});
