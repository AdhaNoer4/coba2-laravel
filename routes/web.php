<?php


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        'title' => 'Home',
        'active' => 'home'
    ]);
});

// Halaman About
Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'active' => 'about',
        "name" => "Adha NOOeRU",
        "email" => "adhanoer4@mail.com",
        "image" => "adha.jpg.webp"
    ]);
});


// Halaman Blog
Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//Halaman Category
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()

    ]);
});


// Halaman Login 
Route::get('/login', [LoginController::class, 'index']);

//Halaman Register
Route::get('/register', [RegisterController::class, 'index']);
