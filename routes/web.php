<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PortfolioController;
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


//front client
Route::get('/',[FrontController::class,'home'])->name("home");

Route::get('/blog',[FrontController::class,'blog'])->name('blog');

Route::get('/portfolio',[FrontController::class,'portfolio'])->name('portfolio');

Route::get('/admin/dashboard',[FrontController::class,'admin'])->name('admin');

Route::get('/contact',[FrontController::class,'contact'])->name('contact');



//back admin

Route::get('/admin/blog',[BlogController::class,'index'])->name('blog.index');

Route::get('/admin/blog/main',[BlogController::class,'create'])->name('blog.create');

Route::post('/admin/blog/store',[BlogController::class,'store'])->name('blog.store');

Route::get('/admin/portfolio',[PortfolioController::class,'index'])->name('portfolio.index');

Route::get('/admin/portfolio/create',[PortfolioController::class,'create'])->name('portfolio.create');

Route::post('/admin/portfolio/store',[PortfolioController::class,'store'])->name('portfolio.store');


// Route::get('/portfolio',[PortfolioController::class,'portfolio'])->name('portfolio');

Route::delete('/admin/portfolio/{id}/destroy',[PortfolioController::class,'destroy'])->name("portfolio.destroy");

Route::get('/admin/portfolio/{id}/show',[PortfolioController::class,'show'])->name("portfolio.show");

Route::get('/admin/portfolio/{id}/edit',[PortfolioController::class,'edit'])->name("portfolio.edit");

Route::put('/admin/portfolio/{id}/update',[PortfolioController::class,'update'])->name("portfolio.update");
