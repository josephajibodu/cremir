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
Route::get('/', function () {
    return view('static.landing');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact');
Route::post('/get-quote', [App\Http\Controllers\ContactController::class, 'getQuote'])->name('quote');
Route::get('/preview', [App\Http\Controllers\ContactController::class, 'preview']);

Route::get('/bootcamp', [App\Http\Controllers\BootcampController::class, 'index'])->name('bootcamp');
Route::get('/bootcamp/payment', [App\Http\Controllers\BootcampController::class, 'payment'])->name('bootcamp.payment');
Route::get('/bootcamp/payment/callback', [App\Http\Controllers\PaymentController::class, 'callback'])->name('bootcamp.payment.callback');
Route::post('/bootcamp/payment/webhook', [App\Http\Controllers\PaymentController::class, 'webhook']);
Route::get('/bootcamp/payment/status', [App\Http\Controllers\PaymentController::class, 'status'])->name('bootcamp.payment.success');

// Route for static files
Route::get('/{slug}', [App\Http\Controllers\StaticController::class, 'show'])->name('static');