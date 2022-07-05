<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;



Route::view('/', 'welcome');
// функция перенаправления, не знаю зачем она мне будет нужна
Route::redirect('/home', '/');

Route::get('test', TestController::class);


// CRUD (create, read, update, delete)
Route::get('posts', [PostController::class, 'index'])->name('posts');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts/create', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{post}', [PostController::class, 'delete'])->name('posts.delete');
Route::put('posts/{post}/like', [PostController::class, 'like'])->name('posts.like');

Route::resource('posts/{post}/comments', CommentController::class);



