<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function blog(){
        return view('blog');
    }

    public function singleBlog(){
        return view('singleBlog');
    }
}
