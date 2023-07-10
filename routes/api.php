<?php

use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\PremiumController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PropertyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/writers',[WriterController::class, "index"]);

Route::get('/writers/{id}',[WriterController::class, "show"]);

Route::post('/writers',[WriterController::class, "store"]);

Route::get('/premiums',[PremiumController::class, "index"]);

Route::get('/premiums/{id}',[PremiumController::class, "show"]);

Route::post('/premiums',[PremiumController::class, "store"]);

Route::get('/areas',[AreaController::class, "index"]);

Route::get('/areas/{id}',[AreaController::class, "show"]);

Route::post('/areas',[AreaController::class, "store"]);

Route::delete('/writers/{id}',[WriterController::class, "destroy"]);

Route::get('/users',[UserController::class, "index"]);

Route::get('/users/{id}',[UserController::class, "show"]);

Route::post('/users',[UserController::class, "store"]);

Route::delete('/users/{id}',[UserController::class, "destroy"]);

Route::get('/products',[ProductController::class, "index"]);

Route::get('/products/search',[ProductController::class, "search"]);

Route::get('/products/{id}',[ProductController::class, "show"]);

Route::post('/products',[ProductController::class, "store"]);

Route::delete('/products/{id}',[ProductController::class, "destroy"]);

Route::get('/categories',[CategoryController::class, "index"]);

Route::get('/categories/{id}',[CategoryController::class, "show"]);

Route::post('/categories',[CategoryController::class, "store"]);

Route::delete('/categories/{id}',[CategoryController::class, "destroy"]);

Route::get('/podcategories',[PodCategoryController::class, "index"]);

Route::get('/podcategories/{id}',[PodCategoryController::class, "show"]);

Route::post('/podcategories',[PodCategoryController::class, "store"]);

Route::delete('/podcategories/{id}',[PodCategoryController::class, "destroy"]);

Route::get('/properties/{id}',[PropertyController::class, "showProductProperties"]);