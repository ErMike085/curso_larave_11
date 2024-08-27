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

    // Crear nuevo post
    // $post = new Post;

    // $post->title = 'Título de prueba 3';
    // $post->content = 'Contenido de prueba 3';
    // $post->category = 'Categoría de prueba 3';

    // $post->save();

    // return $post;

    // $post = Post::find(1);

    // Acualizar registro

    // $post = Post::where('title', 'Título de prueba 1')->first();

    // $post->category = 'Desarrollo web';

    // $post->save();
    // return $post;

    // Listar todos los post
    // $post = Post::orderBy('category', 'asc')->select('id', 'title', 'category')->take(2)->get();

    // $post = Post::find(1);

    // $post->delete();

    // return $post;
});
