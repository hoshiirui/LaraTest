<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        "title" => "Welcome"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Claris Eternalis",
        "email" => "claris@gmail.com",
        "image" => "nyx.jpg"
    ]);
});



Route::get('/post', function () {
    $post_list = [
        [
            "title" => "I Found My Eternity!",
            "author" => "Eternia Vlitaria",
            "slug" => "i-found-my-eternity",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere similique quos error molestiae, nam, aut excepturi optio totam corporis amet a possimus vero quam recusandae repellat necessitatibus voluptatum rerum quisquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere similique quos error molestiae, nam, aut excepturi optio totam corporis amet a possimus vero quam recusandae repellat necessitatibus voluptatum rerum quisquam."
        ],
        [
            "title" => "Sunflower of Nihility",
            "author" => "Estelle Vlitaria",
            "slug" => "sunflower-of-nihility",
            "body" => "Facere similique quos error molestiae, nam, aut excepturi optio totam corporis amet a possimus vero quam recusandae repellat necessitatibus voluptatum rerum quisquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere similique quos error molestiae, nam, aut excepturi optio totam corporis amet a possimus vero quam recusandae repellat necessitatibus voluptatum rerum quisquam."
        ]
    ];
    return view('post', [
        "title" => "Post",
        "posts" => $post_list
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

//sigle page

Route::get('posts/{slug}', function ($slug) {
    $post_list = [
        [
            "title" => "I Found My Eternity!",
            "author" => "Eternia Vlitaria",
            "slug" => "i-found-my-eternity",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere similique quos error molestiae, nam, aut excepturi optio totam corporis amet a possimus vero quam recusandae repellat necessitatibus voluptatum rerum quisquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere similique quos error molestiae, nam, aut excepturi optio totam corporis amet a possimus vero quam recusandae repellat necessitatibus voluptatum rerum quisquam."
        ],
        [
            "title" => "Sunflower of Nihility",
            "author" => "Estelle Vlitaria",
            "slug" => "sunflower-of-nihility",
            "body" => "Facere similique quos error molestiae, nam, aut excepturi optio totam corporis amet a possimus vero quam recusandae repellat necessitatibus voluptatum rerum quisquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere similique quos error molestiae, nam, aut excepturi optio totam corporis amet a possimus vero quam recusandae repellat necessitatibus voluptatum rerum quisquam."
        ]
    ];

    $newpost = [];

    foreach ($post_list as $post) {
        if ($post["slug"] === $slug) {
            $newpost = $post;
        }
    }

    return view('singlepost', [
        "title" => "Single Post",
        "post" => $newpost
    ]);
});
