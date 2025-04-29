<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CustomerAuthController;

Route::get('/', [WebsiteController::class, 'home']);
Route::get('product/{slug}', [WebsiteController::class, 'productDetails'])->name('product.details');
Route::get('products', [WebsiteController::class, 'products'])->name('products');

Route::get('category/{slug}', [WebsiteController::class, 'productByCategory'])->name('category');
Route::get('brand-products/{brandSlug}', [WebsiteController::class, 'productByBrand'])->name('brand-products');
Route::get('checkout', [WebsiteController::class, 'checkout'])->name('checkout');
Route::get('latest-product', [WebsiteController::class, 'latestProduct'])->name('latestProduct');
Route::get('contact-us', [WebsiteController::class, 'contactUs'])->name('contact');
Route::post('order', [WebsiteController::class, 'order'])->name('order');
Route::get('confirm', [WebsiteController::class, 'confirm'])->name('confirm');
Route::get('track-order', [WebsiteController::class, 'trackOrder'])->name('trackOrder');



// CustomerAuthController
Route::get('/login',[CustomerAuthController::class,'login'])->name('login');
Route::get('/register',[CustomerAuthController::class,'register'])->name('register');
Route::post('/login-check',[CustomerAuthController::class,'loginCheck'])->name('login-check');
Route::post('/new-customer',[CustomerAuthController::class,'newCustomer'])->name('new-customer');
Route::get('/customer-logout',[CustomerAuthController::class,'logout'])->name('customer-logout');




    Route::get('/my-dashboard',[CustomerAuthController::class,'dashboard'])->name('customer.dashboard');
    // CustomerAuthController New Route
    Route::get('/show-customer-order/{id}',[CustomerAuthController::class,'showCustomerOrder'])->name('show-customer-order');
    Route::get('/customer/invoice-show/{id}', [CustomerAuthController::class,'showCustomerInvoice'])->name('customer-invoice-show');
    Route::get('/customer/invoice-download/{id}', [CustomerAuthController::class,'showCustomerDownload'])->name('customer-invoice-download');
    Route::post('/editCustomer',[CustomerAuthController::class,'editCustomer'])->name('editCustomer');



