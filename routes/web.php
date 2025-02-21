<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'home']);
Route::get('product/{slug}', [WebsiteController::class, 'productDetails'])->name('product.details');
Route::get('products', [WebsiteController::class, 'products'])->name('products');

Route::get('category/{slug}', [WebsiteController::class, 'productByCategory'])->name('category');
Route::get('checkout', [WebsiteController::class, 'checkout'])->name('checkout');
Route::post('order', [WebsiteController::class, 'order'])->name('order');
Route::get('confirm', [WebsiteController::class, 'confirm'])->name('confirm');
