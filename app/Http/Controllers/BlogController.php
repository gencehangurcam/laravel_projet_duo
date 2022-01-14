<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index()
        {
            // return view('admin');
        }

   public function create()
        {
            return view('admin.blog.main');
        }

    public function store()
        {






        }

}
