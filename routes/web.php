<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/post',[PostController::class,'index'])->name('post.index');
Route::get('/post/create',[PostController::class,'create'])->name('post.create');
Route::post('/post',[PostController::class,'store'])->name('post.store');
Route::get('/post/{id}',[PostController::class,'show'])->name('post.show');
Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::patch('/post/update/{id}',[PostController::class,'update'])->name('post.update');
Route::delete('/post/delete/{id}',[PostController::class,'delete'])->name('post.delete');
Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Auth::routes();
