<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $roles = User::getRoles();
        $users = User::orderBy('created_at','DESC')->limit(5)->get();
        $posts = Post::orderBy('created_at', 'DESC')->limit(5)->get();
        $comments = Comment::orderBy('created_at', 'DESC')->limit(20)->get();
        return view('admin.main.index', compact('posts','comments','users','roles'));
    }
    
}
