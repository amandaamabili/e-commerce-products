<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\{
    ProductController
};
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/product', [ProductController::class, 'store']);
    Route::get('/product/{identify}', [ProductController::class, 'show']);
    Route::delete('/product/{identify}', [ProductController::class, 'destroy']);



Route::get('/', function (){
    return response() -> json(['message' => 'ok']);



});
