<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\BackPagesController;
use App\Http\Controllers\FrontPagesController;
use App\Http\Controllers\FrontProductsController;
use App\Http\Controllers\BackProductsController;

/*-----------------Frontend Page Routes--------------------*/
Route::get('/', [FrontPagesController::class, 'index'])->name('index');

Route::get('/contact', [FrontPagesController::class, 'contact'])->name('contact');

Route::get('/cart', [FrontPagesController::class, 'cart'])->name('cart');



/*------------------------Product Route Frontend----------------------------*/
Route::get('/products', [FrontProductsController::class, 'index'])->name('products');



/*-----------------------------Admin Routes Backend--------------------------------*/
Route::get('/admin', [BackPagesController::class, 'index'])->name('admin.index');

/*----------------------------Product Routes Backend------------------------------*/

Route::get('/admin/product/create', [BackProductsController::class, 'create'])->name('admin.product.create');

Route::get('/admin/product', [BackProductsController::class, 'index'])->name('admin.products');

Route::get('/admin/product/edit/{id}', [BackProductsController::class, 'edit'])->name('admin.product.edit');

Route::post('/admin/product/create', [BackProductsController::class, 'store'])->name('admin.product.store');

Route::post('/admin/product/edit/{id}', [BackProductsController::class, 'update'])->name('admin.product.update');
