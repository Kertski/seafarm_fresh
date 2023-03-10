<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\RatingController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Admin\BlogController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index']);
Route::get('category', [FrontendController::class, 'category']);
Route::get('view-category/{slug}', [FrontendController::class, 'viewcategory']);
Route::get('category/{cat_slug}/{prod_slug}',[FrontendController::class, 'productview']);
Route::get('product-list', [FrontendController::class, 'productListAjax']);
Route::post('searchproduct', [FrontendController::class, 'searchProduct']);
Route::get('blog', [FrontendController::class, 'blogs']);
Route::get('blog/{slug}', [FrontendController::class, 'blogView']);
Route::get('about-us', [FrontendController::class, 'aboutView']);
Route::get('contact-us', [FrontendController::class, 'contactView']);

Auth::routes();

Route::get('load-cart-data', [CartController::class, 'cartcount']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('add-to-cart', [CartController::class,'addProduct']);
Route::post('remove-cart-item', [CartController::class,'removeProduct']);
Route::post('update-cart', [CartController::class, 'updateCart']);


// User 

Route::middleware(['auth'])->group(function () {
    Route::get('cart', [CartController::class, 'viewCart']);
    Route::get('checkout', [CheckoutController::class, 'index']);
    Route::post('place-order', [CheckoutController::class, 'placeOrder']);
    Route::get('my-orders', [UserController::class, 'index']);
    Route::get('view-orders/{id}', [UserController::class, 'view']);

    Route::post('proceed-to-pay', [CheckoutController::class, 'placeOrder']);

    Route::post('rate-product', [RatingController::class, 'add']);
    Route::get('add-review/{slug}/user-review', [ReviewController::class, 'add']);
    Route::post('add-review', [ReviewController::class, 'create']);
    Route::get('edit-review/{product_slug}/userreview', [ReviewController::class, 'edit']);
    Route::put('update-review', [ReviewController::class, 'update']);
});

//Admin Dashboard

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [CategoryController::class,'index']);
    Route::get('categories', [CategoryController::class,'index']);
    Route::get('add-category', [CategoryController::class,'add']);
    Route::post('insert-category',[CategoryController::class,'insert']);

    Route::get('edit-category/{id}', [CategoryController::class,'edit']);
    Route::put('update-category/{id}', [CategoryController::class,'update']);
    Route::get('delete-category/{id}', [CategoryController::class,'destroy']);

    Route::get('products', [ProductController::class, 'index']);
    Route::get('add-products', [ProductController::class, 'add']);
    Route::post('insert-product', [ProductController::class, 'insert']);

    Route::get('edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('update-product/{id}', [ProductController::class, 'update']);

    Route::get('orders', [OrderController::class, 'index']);
    Route::get('admin/view-order/{id}', [OrderController::class, 'view']);
    Route::put('update-order/{id}', [OrderController::class, 'updateOrder']);
    Route::get('order-history', [OrderController::class, 'orderHistory']);

    Route::get('users', [DashboardController::class, 'users']);
    Route::get('view-user/{id}', [DashboardController::class, 'viewUser']);

    Route::get('admin/blogs', [BlogController::class, 'index']);
    Route::get('add-blog', [BlogController::class, 'add']);
    Route::post('insert-blog', [BlogController::class, 'insert']);
    Route::get('edit-blog/{id}', [BlogController::class, 'edit']);
    Route::put('update-blog/{id}', [BlogController::class, 'update']);
});
