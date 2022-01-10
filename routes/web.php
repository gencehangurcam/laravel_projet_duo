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
<<<<<<< HEAD
    return view('welcome');
});
=======
    return view('home');
})->name("home");

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



>>>>>>> 85b6e2653fb20935b9ce12087b5f498c93a6aa1c
