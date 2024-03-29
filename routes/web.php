<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\PublicImageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
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
use App\Http\Controllers\OfferController;

/*-----------------Frontend Page Routes--------------------*/
Route::get('/', [FrontPagesController::class, 'index'])->name('index');

Route::get('/contact', [FrontPagesController::class, 'contact'])->name('contact');

Route::get('/about', [FrontPagesController::class, 'about'])->name('about');

Route::get('/terms', [FrontPagesController::class, 'terms'])->name('terms');

Route::get('/faq', [FrontPagesController::class, 'faq'])->name('faq');

Route::get('/search', [FrontProductsController::class, 'search'])->name('search');


Auth::routes();



/*------------------------Product Route Frontend----------------------------*/
Route::get('/product', [FrontProductsController::class, 'index'])->name('products');

Route::get('/product/{id}/{slug}', [FrontProductsController::class, 'viewproduct'])->name('product.view');

Route::post('/product/{id}/{slug}', [ProductReviewController::class, 'addreview'])->name('product.review');
Route::get('/product/{tag}', [FrontProductsController::class, 'viewbytag'])->name('product.tag');



Route::get('/category', [FrontCategoriesController::class, 'index'])->name('categories');
Route::get('/category/id/{id}', [FrontProductsController::class, 'viewbycat'])->name('product.cat');

Route::get('/category/{type}', [FrontCategoriesController::class, 'bytype'])->name('categories.type');

Route::post('/cart', [FrontProductsController::class, 'addtocart'])->name('product.cart.add');

Route::get('/cart', [CartController::class, 'getCart'])->name('product.cart');


Route::get('cart/{id}/remove', [CartController::class, 'removeItem'])->name('product.cart.remove');

Route::get('/cart/clear', [CartController::class, 'clearCart'])->name('product.cart.clear');

Route::get('auth/google/', [LoginController::class, 'redirectToGoogle'])->name('login.google');

Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('login.googlecallback');

Route::get('auth/facebook/', [LoginController::class, 'facebookRedirect'])->name('login.facebook');

Route::get('auth/facebook/callback', [LoginController::class, 'loginWithFacebook'])->name('login.facebookcallback');
/*-----------------------------Admin Routes Backend--------------------------------*/
//Route::get('/admin', [BackPagesController::class, 'index'])->name('admin.index');

/*----------------------------Product Routes Backend------------------------------*/








Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.index')->middleware('is_admin');
Route::get('/admin/product/create', [BackProductsController::class, 'create'])->name('admin.product.create')->middleware('is_admin');

Route::get('/admin/product', [BackProductsController::class, 'index'])->name('admin.products')->middleware('is_admin');

Route::get('/admin/product/edit/{id}', [BackProductsController::class, 'edit'])->name('admin.product.edit')->middleware('is_admin');

Route::post('/admin/product/create', [BackProductsController::class, 'store'])->name('admin.product.store')->middleware('is_admin');

Route::get('/admin/product/{id}', [OfferController::class, 'showoffer'])->name('admin.product.showoffer')->middleware('is_admin');

Route::post('/admin/product/{id}', [OfferController::class, 'addoffer'])->name('admin.product.addoffer')->middleware('is_admin');

Route::post('/admin/product/edit/{id}', [BackProductsController::class, 'update'])->name('admin.product.update')->middleware('is_admin');

Route::post('/admin/product/delete/{id}', [BackProductsController::class, 'delete'])->name('admin.product.delete')->middleware('is_admin');

Route::get('/admin/category/create', [BackCategoriesController::class, 'create'])->name('admin.category.create')->middleware('is_admin');

Route::get('/admin/category', [BackCategoriesController::class, 'index'])->name('admin.categories')->middleware('is_admin');


Route::get('/admin/category/edit/{id}', [BackCategoriesController::class, 'edit'])->name('admin.category.edit')->middleware('is_admin');

Route::post('/admin/category/create', [BackCategoriesController::class, 'store'])->name('admin.category.store')->middleware('is_admin');

Route::post('/admin/category/edit/{id}', [BackCategoriesController::class, 'update'])->name('admin.category.update')->middleware('is_admin');

Route::post('/admin/category/delete/{id}', [BackCategoriesController::class, 'delete'])->name('admin.category.delete')->middleware('is_admin');

Route::get('/admin/order', [OrderController::class, 'order'])->name('admin.orders')->middleware('is_admin');

Route::get('/admin/image', [PublicImageController::class, 'addimage'])->name('admin.coverimage')->middleware('is_admin');

Route::get('/admin/order/{id}', [OrderController::class, 'orderview'])->name('admin.order.view')->middleware('is_admin');

Route::post('/admin/order/{id}', [OrderController::class, 'changestatus'])->name('admin.order.changestatus')->middleware('is_admin');

Route::get('/admin/offer', [OfferController::class, 'show'])->name('admin.offers')->middleware('is_admin');

Route::get('/admin/offer/create', [OfferController::class, 'create'])->name('admin.offer.create')->middleware('is_admin');

Route::post('/admin/offer/create', [OfferController::class, 'store'])->name('admin.offer.store')->middleware('is_admin');

Route::post('/admin/offer/delete/{id}', [OfferController::class, 'delete'])->name('admin.offer.delete')->middleware('is_admin');

Route::get('/admin/image', [PublicImageController::class, 'addimage'])->name('admin.coverimage')->middleware('is_admin');

Route::post('/admin/image', [PublicImageController::class, 'storeimage'])->name('admin.coverimage.store')->middleware('is_admin');

Route::get('/admin/gallery', [PublicImageController::class, 'showimage'])->name('admin.gallery')->middleware('is_admin');

Route::post('/admin/gallery/{id}', [PublicImageController::class, 'deleteimage'])->name('admin.coverimage.delete')->middleware('is_admin');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout.index');

    Route::get('/profile', [FrontPagesController::class, 'profile'])->name('profile');
    //TODO: Profile background Redesign.

    Route::get('/order/{id}', [OrderController::class, 'userorderview'])->name('order');
    Route::post('/profile', [UserController::class, 'editprofile'])->name('editprofile');
    Route::post('/profile/editname', [UserController::class, 'editname'])->name('editname');
    Route::post('/profile/changepassword', [UserController::class, 'changepassword'])->name('changepassword');
    Route::post('/profile/changephone', [UserController::class, 'changephone'])->name('changephone');
    Route::post('/profile/changeaddress', [UserController::class, 'changeaddress'])->name('changeaddress');
    Route::post('/profile/addimage', [UserController::class, 'addimage'])->name('addimage');
    Route::post('wishlist/add', [WishlistController::class, 'addwish'])->name('wishlist.add');
    Route::get('wishlist/remove/{id}', [WishlistController::class, 'removeWLbyid'] )->name('wishlist.removebyid');
    Route::get('/wishlist/', [WishlistController::class, 'showWishlist'])->name('wishlist');
    Route::post('/checkout/order', [CheckoutController::class, 'placeOrder'])->name('checkout.place.order');
});





