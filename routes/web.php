<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
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

// Halaman Home
Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

// Halaman About
Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        "name" => "Adha NOOeRU",
        "email" => "adhanoer4@mail.com",
        "image" => "adha.jpg.webp"
    ]);
});


// Halaman Blog
Route::get('/blog', [PostController::class, 'index']);

// halaman single post
Route::get('blog/{post:slug}', [PostController::class, 'show']);

//Halaman Category
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()

    ]);
});

//Halaman  Categories
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
