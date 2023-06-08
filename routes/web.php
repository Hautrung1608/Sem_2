<?php

use App\Http\Controllers\AccountController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

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
Route::get('/show/{id}', [HomeController::class, 'show'])->name('show');

Route::get('/showCart', [CartController::class, 'showCart'])->name('showcart');
Route::get('/cart/{id}', [CartController::class, 'add']);
Route::post('/cart/{id}', [CartController::class, 'create'])->name('cart.add');
Route::post('update-cart/{id}', [CartController::class, 'update'])->name('cart.update');
Route::get('delete-cart/{id}', [CartController::class, 'delete'])->name('cart.delete');

Route::get('/danhmuc/{id}', [HomeController::class, 'danhmuc'])->name('danhmuc');




Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

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
    Route::post('/upquan/{id}', [ProductController::class, 'upquan'])->name('product.upquantity');

    //Account

    Route::resource('account', AccountController::class);


});

//login

Route::get('/login', [UserController::class, 'login'])->name('login.index');
Route::post('/login', [UserController::class, 'postLogin']);

//register

Route::get('/register', [UserController::class, 'register'])->name('register.index');
Route::post('/register', [UserController::class, 'postRegister']);

//logout

Route::get('logout', [UserController::class, 'logout'])->name('logout');

//logon

Route::get('logon', [UserController::class, 'logon'])->name('admin.login');
Route::post('logon', [UserController::class, 'postLogon']);
Route::get('adminLogout', [UserController::class, 'adminLogout'])->name('admin.logout');
