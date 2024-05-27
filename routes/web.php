<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use App\Http\Controllers\C_user;
use Illuminate\Support\Facades\Route; 


use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
// use App\Http\Controllers\DashboardPostController;



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
        "title" => "Home",
        'active' => 'home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Angga Maulana E",
        "email" => "anggaefendi@gmail.com",
        "image" => "ame.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index'] );

// Halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        "title" => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});



// Untuk login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.user');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout.user');


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('user.register')->middleware('guest');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
// Route::get('/v_user', [C_user::class, 'index'])->name('view');
// Route::get('/about', [C_about::class, 'index'])->name('about');
