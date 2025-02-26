<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Получаем все записи из таблицы posts
        $posts = Post::all();
        
        return view('web.section.intro.index', compact('posts'));
    }
}
