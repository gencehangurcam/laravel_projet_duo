<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){

        return view('admin.portfolio.main');

    }

    public function portfolio()
    {
        $articles = Article::all();
        return view('portfolio', compact("articles"));
    }

    public function create(){

        return view('admin.portfolio.create');

    }
    public function store(Request $request){

        $articles = new Article();
        $articles->tritre =$request->titre;
        $articles->image =$request->image;
        $articles->description =$request->description;
        $articles ->save();

        return redirect()->route('portfolio.index');



    }

    public function destroy(Article $id){
        $id->delete();

        return redirect()->route('portfolio.index');




    }
}
