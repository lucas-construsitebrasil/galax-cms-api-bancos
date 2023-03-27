<?php

use App\Http\Controllers\V1\Controller;
use App\Http\Controllers\V1\ModulosSite;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function () {
    Route::group(['middleware' => ['externalAuth']], function () {
        Route::get('test', [Controller::class, 'test'])->name('test');
        Route::get('getAllModules', [ModulosSite::class, 'index'])->name('index');
        Route::get('getModule/{id}', [ModulosSite::class, 'show'])->name('show');
        Route::get('createModule', [ModulosSite::class, 'create'])->name('create');
        Route::get('deleteModule', [ModulosSite::class, 'delete'])->name('delete');
    });
});

Route::get('/', function () {
    return "Bem-vindo ao Microserviço responsável pelo gereciamento dos bancos do CMS.";
});
