<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $category = Category::findOrFail($post->category_id);
        return view('post.show', compact('post','category'));
    }
    
}
