<?php


use App\Http\Controllers\UserController;
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
use App\Http\Controllers\FrontCategoriesController;
use App\Http\Controllers\BackProductsController;
use App\Http\Controllers\BackCategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;

/*-----------------Frontend Page Routes--------------------*/
Route::get('/', [FrontPagesController::class, 'index'])->name('index');

Route::get('/contact', [FrontPagesController::class, 'contact'])->name('contact');

Route::get('/search', [FrontProductsController::class, 'search'])->name('search');


Auth::routes();



/*------------------------Product Route Frontend----------------------------*/
Route::get('/product', [FrontProductsController::class, 'index'])->name('products');

Route::get('/product/{slug}', [FrontProductsController::class, 'viewproduct'])->name('product.view');



Route::get('/category', [FrontCategoriesController::class, 'index'])->name('categories');

Route::post('/cart/{id}', [FrontProductsController::class, 'addtocart'])->name('product.cart.add');

Route::get('/cart', [CartController::class, 'getCart'])->name('product.cart');


Route::get('cart/{id}/remove', [CartController::class, 'removeItem'])->name('product.cart.remove');

Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('product.cart.clear');
/*-----------------------------Admin Routes Backend--------------------------------*/
//Route::get('/admin', [BackPagesController::class, 'index'])->name('admin.index');

/*----------------------------Product Routes Backend------------------------------*/




Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.index')->middleware('is_admin');
Route::get('/admin/product/create', [BackProductsController::class, 'create'])->name('admin.product.create')->middleware('is_admin');

Route::get('/admin/product', [BackProductsController::class, 'index'])->name('admin.products')->middleware('is_admin');

Route::get('/admin/product/edit/{id}', [BackProductsController::class, 'edit'])->name('admin.product.edit')->middleware('is_admin');

Route::post('/admin/product/create', [BackProductsController::class, 'store'])->name('admin.product.store')->middleware('is_admin');

Route::post('/admin/product/edit/{id}', [BackProductsController::class, 'update'])->name('admin.product.update')->middleware('is_admin');

Route::post('/admin/product/delete/{id}', [BackProductsController::class, 'delete'])->name('admin.product.delete')->middleware('is_admin');

Route::get('/admin/category/create', [BackCategoriesController::class, 'create'])->name('admin.category.create')->middleware('is_admin');

Route::get('/admin/category', [BackCategoriesController::class, 'index'])->name('admin.categories')->middleware('is_admin');

Route::get('/admin/category/edit/{id}', [BackCategoriesController::class, 'edit'])->name('admin.category.edit')->middleware('is_admin');

Route::post('/admin/category/create', [BackCategoriesController::class, 'store'])->name('admin.category.store')->middleware('is_admin');

Route::post('/admin/category/edit/{id}', [BackCategoriesController::class, 'update'])->name('admin.category.update')->middleware('is_admin');

Route::post('/admin/category/delete/{id}', [BackCategoriesController::class, 'delete'])->name('admin.category.delete')->middleware('is_admin');

Route::get('/admin/order', [OrderController::class, 'order'])->name('admin.orders')->middleware('is_admin');

Route::get('/admin/order/{id}', [OrderController::class, 'orderview'])->name('admin.order.view')->middleware('is_admin');

Route::post('/admin/order/{id}', [OrderController::class, 'changestatus'])->name('admin.order.changestatus')->middleware('is_admin');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout.index');

    Route::get('/profile', [FrontPagesController::class, 'profile'])->name('profile');
    Route::get('/order/{id}', [OrderController::class, 'userorderview'])->name('order');
    Route::post('/profile', [UserController::class, 'editprofile'])->name('editprofile');
    Route::post('/profile/editname', [UserController::class, 'editname'])->name('editname');
    Route::post('/profile/changepassword', [UserController::class, 'changepassword'])->name('changepassword');
    Route::post('/profile/changephone', [UserController::class, 'changephone'])->name('changephone');
    Route::post('/profile/changeaddress', [UserController::class, 'changeaddress'])->name('changeaddress');
    Route::post('/profile/addimage', [UserController::class, 'addimage'])->name('addimage');


    Route::post('/checkout/order', [CheckoutController::class, 'placeOrder'])->name('checkout.place.order');
});





