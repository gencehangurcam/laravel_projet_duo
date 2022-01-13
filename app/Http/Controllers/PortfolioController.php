<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){


        $articles = Article::all();
            return view('admin.portfolio.main', compact("articles"));

    }

    

    public function create(){

        return view('admin.portfolio.create');

    }
    public function store(Request $request){

        $articles = new Article();
        $articles->titre =$request->titre;
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
