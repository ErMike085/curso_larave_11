<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class);

Route::apiResource('posts', PostController::class);

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


// Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
//     $category = $category ? "de la categoría: $category" : "";

//     return "Aquí se mostrará el post con id: $post, $category";
// });