<?php

use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\CommentController;
use App\Http\Controllers\api\ImageController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('/users', UserController::class);
Route::resource('/products', ProductController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/images', ImageController::class)->middleware('auth:sanctum');
Route::resource('/comments', CommentController::class)->middleware('auth:sanctum');
