<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/produk', [ProductController::class, 'katalog']);

Route::middleware(['auth'])->group(function () {
    Route::resource('products', ProductController::class);
});

require __DIR__.'/auth.php';