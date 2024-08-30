<?php
namespace App\Models;

use Illuminate\Support\Arr;

//membuat model sendiri 

class Post {
    public static function all()
    {
    return [
    [
    'id'=> 1,
    'slug' => 'judul-artikel-1',
    'title' => 'Judul Artikel 1',
    'author' => 'Robi Permana',
    'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt iure rerum
    veniam ullam dicta
    labore
    expedita aliquam, totam eos.'
    ],
    [
    'id'=> 2,
    'title' => 'Judul Artikel 2',
    'slug' => 'judul-artikel-2',
    'author' => 'Robi Permana',
    'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate explicabo
    cupiditate cum, maiores aspernatur suscipit minima nostrum minus fugiat doloribus necessitatibus quos velit
    deserunt iste nulla saepe hic impedit error. Nihil doloribus totam natus perferendis a cum nemo, qui, minima
    asperiores necessitatibus atque error porro dolores ad officia harum neque.'
    ],
    [
    'id'=> 3,
    'slug' => 'judul-artikel-3',
    'title' => 'Judul Artikel 3',
    'author' => 'Robi Permana',
    'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, fuga.'
    ],
    ];
    }
    public static function find($slug): array
    {

        $post =   Arr::first(static::all(), fn($post) =>  $post['slug'] == $slug) ?? abort(404);

        return $post;
    }
    }