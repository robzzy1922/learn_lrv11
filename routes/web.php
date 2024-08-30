<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home', ['name' => 'Robi Permana','title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function($slug){

    $post = Post::find($slug);
return view('post', ['title' => 'Single Post', 'post'=> $post]);
   });

Route::get('/kontak', function () {
    return view('kontak', ['title' => 'Contact']);
});