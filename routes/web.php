<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['name' => 'Robi Permana','title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts' =>
    [
'title' => 'Judul Artikel 1',
'author' => 'Robi Permana',
'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt iure rerum
            veniam ullam dicta
            labore
            expedita aliquam, totam eos.'
    ],
    [
        'title' => 'Judul Artikel 2',
        'author' => 'Robi Permana',
        'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate explicabo
            cupiditate cum, maiores aspernatur suscipit minima nostrum minus fugiat doloribus necessitatibus quos velit
            deserunt iste nulla saepe hic impedit error. Nihil doloribus totam natus perferendis a cum nemo, qui, minima
            asperiores necessitatibus atque error porro dolores ad officia harum neque.'
            ],
    [
        'title' => 'Judul Artikel 3',
        'author' => 'Robi Permana',
        'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, fuga.'
            ],
]);
});

Route::get('/kontak', function () {
    return view('kontak', ['title' => 'Contact']);
});
