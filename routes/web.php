<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/form', [ProductController::class, 'index'])->name('products.index');
Route::post('/form/create', [ProductController::class, 'store'])->name('products.store');

Route::get('/products', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/products/{id}', [CheckoutController::class, 'checkout'])->name('checkout.store');



require __DIR__.'/auth.php';
