<?php

namespace App\Http\Controllers\Profile\Likes;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
       
        auth()->user()->likedPosts()->detach($post->id);
        $posts = auth()->user()->likedPosts;
        return redirect()->route('profile.likes.index');
        return view('profile.likes.index', compact('posts'));
    }
    
}
