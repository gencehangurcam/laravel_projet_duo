<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('admin.blog.main', compact("articles"));
    }

    public function create(){
        return view('admin.blog.create');
    }

    public function store(Request $request){
        $articles = new Article();
        $articles->titre =$request->titre;
        $articles->image =$request->image;
        $articles->description =$request->description;
        $articles ->save();
        return redirect()->route('blog.index');
    }

    public function destroy(Article $id){
        $id->delete();
        return redirect()->route('blog.index');
    }

    public function show(Article $id) {
        $articles = $id;
        return view("admin.blog.show", compact("articles"));
    }
    
    public function edit(Article $id) {
        $articles = $id;
        return view("admin.blog.edit", compact("articles"));
    }

    public function update(Article $id, Request $request)
    {
        $articles = $id;
        $articles->titre =$request->titre;
        $articles->image =$request->image;
        $articles->description  =$request->description;
        $articles ->save();
        return redirect("/admin/blog/") . $articles->id;
    }
}
