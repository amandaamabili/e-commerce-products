<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\ProductController;

Route::post('/product', [ProductController::class, 'store']);

Route::get('/', function (){
    return response() -> json(['message' => 'ok']);
});
