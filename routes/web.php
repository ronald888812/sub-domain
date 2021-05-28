<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Product1Controller;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\TipesController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('request', RequestController::class);
Route::resource('user', UserController::class);

Route::domain('{subdomain}.'.config('app.short_url'))->group(function () {
    Route::resource('products', 'Product1Controller');
    Route::resource('tipes', 'TipesController');
});

