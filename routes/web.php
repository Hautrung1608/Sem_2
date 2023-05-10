<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');

//Category

Route::get('/category', [CategoryController::class, 'index'])->name('category.index'); 

Route::get('/category-add', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category-add', [CategoryController::class, 'store']);

Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category-update/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::get('/category-delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

//Product

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product-add', [ProductController::class, 'create'])->name('product.create');
Route::post('/product-add', [ProductController::class, 'store']);
Route::get('/product-edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product-update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product-delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

