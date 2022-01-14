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
<<<<<<< HEAD
        $articles = Article::all();

        return view('portfolio',compact("articles"));
=======
        return view('portfolio');
>>>>>>> 229092007cda7cc75e526469aeba2ded1070b21e
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
