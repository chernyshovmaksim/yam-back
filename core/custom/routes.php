<?php

use EvolutionCMS\Main\Controllers\CallbackController;
use EvolutionCMS\Main\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

Route::get('/helloworld', function () {
    return Response::make('Hello World!');
});

// If you need to wrap the parser with middleware
// or need grouping, uncomment this line
// Route::fallbackToParser();


Route::group(['prefix' => '/ajax'], function () {
    Route::post('/callback', [CallbackController::class, 'send']);
});
