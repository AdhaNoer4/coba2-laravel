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
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        "name" => "Adha NOOeRU",
        "email" => "adhanoer4@mail.com",
        "image" => "adha.jpg.webp"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adha Noer H",
            "body" => "  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic quod cum rerum provident mollitia eveniet delectus? Repellat eum id doloribus amet nam expedita architecto optio laborum quia dicta minima labore obcaecati rerum, natus deserunt deleniti praesentium! Expedita assumenda tenetur, illo sequi repellat atque a laudantium accusamus dolorem. Corporis sint eveniet sit consectetur, consequuntur ullam, ipsam eligendi perferendis, error aliquid excepturi porro atque est aperiam. Vel quisquam debitis dolorem doloremque deserunt unde nam harum nulla vitae. Recusandae doloribus culpa amet! Porro inventore temporibus at. Quod neque, magnam ut eum beatae aliquid non voluptate ex excepturi, dolor labore odit, earum provident amet."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mochy Fami",
            "body" => "  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic quod cum rerum provident mollitia eveniet delectus? Repellat eum id doloribus amet nam expedita architecto optio laborum quia dicta minima labore obcaecati rerum, natus deserunt deleniti praesentium! Expedita assumenda tenetur, illo sequi repellat atque a laudantium accusamus dolorem. Corporis sint eveniet sit consectetur, consequuntur ullam, ipsam eligendi perferendis, error aliquid excepturi porro atque est aperiam. Vel quisquam debitis dolorem doloremque deserunt unde nam harum nulla vitae. Recusandae doloribus culpa amet! Porro inventore temporibus at. Quod neque, magnam ut eum beatae aliquid non voluptate ex excepturi, dolor labore odit, earum provident amet."
        ]
    ];
    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});

// halaman single post
Route::get('blog/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adha Noer H",
            "body" => "  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic quod cum rerum provident mollitia eveniet delectus? Repellat eum id doloribus amet nam expedita architecto optio laborum quia dicta minima labore obcaecati rerum, natus deserunt deleniti praesentium! Expedita assumenda tenetur, illo sequi repellat atque a laudantium accusamus dolorem. Corporis sint eveniet sit consectetur, consequuntur ullam, ipsam eligendi perferendis, error aliquid excepturi porro atque est aperiam. Vel quisquam debitis dolorem doloremque deserunt unde nam harum nulla vitae. Recusandae doloribus culpa amet! Porro inventore temporibus at. Quod neque, magnam ut eum beatae aliquid non voluptate ex excepturi, dolor labore odit, earum provident amet."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mochy Fami",
            "body" => "  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic quod cum rerum provident mollitia eveniet delectus? Repellat eum id doloribus amet nam expedita architecto optio laborum quia dicta minima labore obcaecati rerum, natus deserunt deleniti praesentium! Expedita assumenda tenetur, illo sequi repellat atque a laudantium accusamus dolorem. Corporis sint eveniet sit consectetur, consequuntur ullam, ipsam eligendi perferendis, error aliquid excepturi porro atque est aperiam. Vel quisquam debitis dolorem doloremque deserunt unde nam harum nulla vitae. Recusandae doloribus culpa amet! Porro inventore temporibus at. Quod neque, magnam ut eum beatae aliquid non voluptate ex excepturi, dolor labore odit, earum provident amet."
        ]
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => "Single Post",
        'post' => $new_post
    ]);
});
