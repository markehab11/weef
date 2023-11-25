<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

    Route::resource('sliders', SliderController::class);

    Route::resource('Categories', CategorieController::class);

    Route::resource('Products', ProductController::class);

    Route::resource('blogs', BlogController::class);

