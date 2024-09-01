<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;

Route::resource('productos', ProductoController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('proveedores', ProveedorController::class);

