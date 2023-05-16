<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::resource('category', CategoryController::class);
Route::get('/category-softDelete', [CategoryController::class, 'softDelete'])->name('category.softDelete');
Route::get('/restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
Route::get('/forceDelete/{id}', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');


//Product

Route::resource('product', ProductController::class);
Route::get('/product-softDelete', [ProductController::class, 'softDelete'])->name('product.softDelete');
Route::get('/prorestore/{id}', [ProductController::class, 'restore'])->name('product.restore');
Route::get('/proforceDelete/{id}', [ProductController::class, 'forceDelete'])->name('product.forceDelete');

//login

Route::get('/login', [UserController::class, 'login'])->name('login.index');
Route::post('/login', [UserController::class, 'postLogin']);

//register

Route::get('/register', [UserController::class, 'register'])->name('register.index');
Route::post('/register', [UserController::class, 'postRegister']);

//logout

Route::get('logout', [UserController::class, 'logout']);