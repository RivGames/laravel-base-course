<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/post',[PostController::class,'index']);
Route::get('/post/create',[PostController::class,'create']);
Route::get('/post/update',[PostController::class,'update']);
Route::get('/post/delete',[PostController::class,'delete']);
Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Auth::routes();
