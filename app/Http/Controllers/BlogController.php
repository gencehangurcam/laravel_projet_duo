<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index()
        {
            //
        }

   public function create()
        {
            return view('admin.blog.main');
        }

    public function store()
        {

        }

}
