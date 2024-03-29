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

// rotas das paginas

Route::get('/product', [ProductController::class, 'page'])->name('pages.product.page');
Route::get('/category', [CategoryController::class, 'page'])->name('pages.category.page');
Route::get('/unit', [UnitController::class, 'page'])->name('pages.unit.page');
Route::get('/supplier', [SupplierController::class, 'page'])->name('pages.supplier.page');

Route::get('/user', [UserController::class, 'user'])->name('user.user');


Route::post('/product', [ProductController::class, 'create'])->name('pages.product.create');
Route::post('/category', [CategoryController::class, 'create'])->name('pages.category.create');
Route::post('/unit', [UnitController::class, 'create'])->name('pages.unit.create');
Route::post('/supplier', [SupplierController::class, 'create'])->name('pages.supplier.create');

Route::post('/user', [UserController::class, 'user'])->name('user.user');


// rotas de processamento



