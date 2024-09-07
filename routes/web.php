<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;

Route::middleware(AuthMiddleware::class)->get('/', function () {
    return view('home');
})->name('home'); 

Route::get('/login{error?}', [LoginController::class, 'index'])->name('user.login');

Route::middleware(AuthMiddleware::class)->prefix('/app')->group(function(){
    // rotas das paginas
    Route::get('/product', [ProductController::class, 'page'])->name('pages.product.page');
    Route::get('/category', [CategoryController::class, 'page'])->name('pages.category.page');
    Route::get('/unit', [UnitController::class, 'page'])->name('pages.unit.page');
    Route::get('/supplier', [SupplierController::class, 'page'])->name('pages.supplier.page');
    Route::get('/logout', [LoginController::class, 'logout'])->name('user.logout');
    Route::get('/user', [UserController::class, 'user'])->name('user.user');
});


Route::post('/product', [ProductController::class, 'create'])->name('pages.product.create');
Route::post('/category', [CategoryController::class, 'create'])->name('pages.category.create');
Route::post('/unit', [UnitController::class, 'create'])->name('pages.unit.create');
Route::post('/supplier', [SupplierController::class, 'create'])->name('pages.supplier.create');

Route::post('/login', [LoginController::class, 'auth'])->name('user.login');

Route::post('/user', [UserController::class, 'user'])->name('user.user');


// rotas de processamento



