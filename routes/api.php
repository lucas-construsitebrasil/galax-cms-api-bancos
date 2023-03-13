<?php

use App\Http\Controllers\V1\Controller;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function () {
    Route::group(['middleware' => ['externalAuth']], function () {
        Route::get('test', [Controller::class, 'test'])->name('test');
    });
});

Route::get('/', function () {
    return "Bem-vindo ao Microserviço responsável pelo gereciamento dos bancos do CMS.";
});
