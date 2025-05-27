<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Models\Product;

Route::get('/', function () {
    $products = Product::with('supplier')->get();
    return view('welcome', compact('products'));
})->name('welcome');

    Route::resource('suppliers', SupplierController::class);
    Route::resource('products', ProductController::class);