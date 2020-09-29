<?php

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
    return view('welcome');
});

Route::get("/about.html", function(){
    return "hi";
});

// Route::get("/about",'WelcomeController@about');  舊寫法
Route::get("/about",[\App\Http\Controllers\WelcomeController::class, 'about']);

Route::resource('posts',\App\Http\Controllers\PostsController::class)->only(['index','show']);

Route:: resource('posts.comments',\App\Http\Controllers\PostsController::class)->shallow();