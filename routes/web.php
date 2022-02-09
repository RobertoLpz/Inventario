<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::apiResource('productos', 'App\Http\Controllers\ProductosController');
Route::apiResource('categorias', 'App\Http\Controllers\CategoriasController');
