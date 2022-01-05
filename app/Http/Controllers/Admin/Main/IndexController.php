<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('admin.main.index', compact('posts'));
    }
    
}
