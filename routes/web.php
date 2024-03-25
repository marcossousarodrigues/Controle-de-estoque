<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/product', [ProductController::class, 'create']);
Route::get('/category', [CategoryController::class, 'create']);
Route::get('/unit', [UnitController::class, 'create']);
Route::get('/supplier', [SupplierController::class, 'create']);

Route::get('/user', [UserController::class, 'user']);



