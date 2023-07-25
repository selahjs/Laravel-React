<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\HubController;
use App\Http\Controllers\MobilizerController;
use App\Http\Controllers\SiteController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users/{id}', [UserController::class, 'show']);
Route::apiResource('products', ProductsController::class);
Route::get('/regions', [RegionController::class, 'index']);
Route::get('/provinces', [ProvinceController::class, 'index']);
Route::get('/hubs', [HubController::class, 'index']);
Route::get('/sites', [SiteController::class, 'index']);
Route::get('/mobilizers/{pageNum?}', [MobilizerController::class, 'index']);
// Route::middleware('auth:sanctum')->apiResource('products', ProductsController::class);

