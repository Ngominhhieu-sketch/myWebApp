<?php

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;





Route::get('/', [BookController::class, 'getAllBooks']);

Route::get('/books/{book}', [BookController::class, 'getBookById']);

Route::get('/create-order', [OrderController::class, 'viewOrder']);

Route::post('/create-order', [OrderController::class, 'storeOrder']);

Route::get('/orders', [ordercontroller::class, 'allOrder'])-> middleware('auth');

Route::get('/orders/{id}', [orderController::class, 'singleOrder'])-> middleware('auth');

Route::delete('/orders/{id}', [OrderController::class, 'deleteOrder']);



Auth::routes([
    'register'=> false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
