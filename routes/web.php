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

// Route for static files
Route::get('/{slug}', [App\Http\Controllers\StaticController::class, 'show'])->name('static');
