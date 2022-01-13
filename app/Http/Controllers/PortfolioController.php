<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){

    }

    public function portfolio()
    {
        $articles = Article::all();
        return view('portfolio', compact("articles"));
    }

    public function create(){

    }
    public function store(){


    }
}
