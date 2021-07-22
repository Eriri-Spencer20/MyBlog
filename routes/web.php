<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Raditya Agung",
        "email" => "radityaappj23@gmail.com",
        "image" => "radit.jpg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']); 
 
 

//  halaman single post
Route::get('posts/{slug}', function ($slug) {

    return view  ('post',[
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});