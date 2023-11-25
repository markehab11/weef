<?php

use App\Http\Controllers\Api\SliderController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/sliders', [SliderController::class, 'index']);
Route::get('/slider/{id}', [SliderController::class, 'show']);
Route::post('/sliders', [SliderController::class, 'store']);
Route::post('/slider/{id}', [SliderController::class, 'update']);
Route::post('/sliders/{id}', [SliderController::class, 'destroy']);




Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::post('/category/{id}', [CategoryController::class, 'update']);
Route::post('/categories/{id}', [CategoryController::class, 'destroy']);


Route::get('products', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store']);
Route::post('/product/{id}', [ProductController::class, 'update']);
Route::post('/products/{id}', [ProductController::class, 'destroy']);


Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);
Route::post('/blogs', [BlogController::class, 'store']);
Route::post('/blog/{id}', [BlogController::class, 'update']);
Route::post('/blogs/{id}', [BlogController::class, 'destroy']);

