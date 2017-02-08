<?php

namespace App\Http\Controllers;

use App\Edit;
use App\Blog;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $blogs = Blog::all();

        return view('/edit', ['blogs' => $blogs]);
    }
    public function addText(Request $request)
    {
        $blog = new Blog;
        $blog->content = $request->content;
        $blog->save();
        if($blog = true)
        {
            echo "Запись добавлена успешно";
                return redirect('/blog');
        }
    }
}
