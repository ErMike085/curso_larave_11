<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
    $category = $category ? "de la categoría: $category" : "";

    return "Aquí se mostrará el post con id: $post, $category";
});

Route::get('prueba', function () {
    $post = Post::find(1);

    dd($post->is_active);
    // return $post->is_active;
});
