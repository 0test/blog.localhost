<?php

namespace App\Http\Controllers\Post\Like;
use App\Http\Controllers\Controller;
use App\Models\Post;
class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        //TODO:  not needed if use toggle() to StoreController
        auth()->user()->likedPosts()->detach($post->id);
        return redirect()->back();
    }
    
}
