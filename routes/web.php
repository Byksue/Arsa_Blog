<?php

use App\Http\Controllers\AdminCategoryContoller;
use App\Http\Controllers\April;
use App\Models\Category;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Hadi Akbar",
        "email" => "harusapaan@gmail.com",
        "img" => "pp.jfif"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

Route::get('/april', [April::class, 'index']);

// halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// halaman categories
Route::get('/categories', function(){
    return view('categories', [
        'title' => 'All Categories',
        'categories' => Category::all()
    ]);
});

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// Logout
Route::post('/logout', [LoginController::class, 'logout']);

// Register akun
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryContoller::class)->except('show');



// halaman posts dengan categories
// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// halaman posts dengan user/authors
// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Post by Author : $author->name",
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });