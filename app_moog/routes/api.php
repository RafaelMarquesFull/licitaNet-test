<?php

use App\Http\Controllers\Api\BrandsController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\LocationsController;
use App\Http\Controllers\Api\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::apiResource('locations', LocationsController::class);
    Route::apiResource('products', ProductsController::class);
    Route::apiResource('brands', BrandsController::class);
    Route::apiResource('categories', CategoriesController::class);
});