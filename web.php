<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExrController;
Route::get('/', function () {
    return view('welcome');
});




Route::get('/show/{value}', [ExrController::class, 'show']);

Route::get('/add/{num1}/{num2}', [ExrController::class, 'add']);

Route::get('/products', function () {
    return view('products');
});
Route::get('/item', [ExrController::class,'showItem']);
