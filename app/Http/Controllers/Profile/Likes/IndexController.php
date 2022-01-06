<?php

namespace App\Http\Controllers\Profile\Likes;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->likedPosts;
        return view('profile.likes.index', compact('posts'));
    }
    
}
