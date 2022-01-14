<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        $articles = Article::all();
        return view('blog', compact("articles"));
    }
    public function portfolio(){
        $articles = Article::all();

        return view('portfolio',compact("articles"));
    }


    public function contact()
    {
        return view('contact');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }

}
