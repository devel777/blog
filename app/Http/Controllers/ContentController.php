<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $blogs = Blog::all();

        return view('/content', ['blogs' => $blogs]);
    }
}
